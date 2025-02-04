<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\PropertyVideo;
use Illuminate\Support\Facades\Auth;
use \App\Mail\PropertyPosted;

class PropertyController extends Controller
{
    public function index()
    {
        $county = request()->input('county');
        $budget = request()->input('budget');
        $bedrooms = request()->input('bedrooms', []);


        $query = Property::query();

        if ($county) {
            $query->whereHas('location', function ($query) use ($county) {
                $query->where('county', $county);
            });
        }

        if ($budget) {
            list($min, $max) = array_map('intval', explode(' - ', $budget));


            if (isset($budgetRanges[$budget])) {
                $query->whereBetween('price', [$min, $max]);
            }
        }

        if (!empty($bedrooms)) {
            $query->whereIn('bedrooms', $bedrooms);
        }

        $query->where('status', 'Available');
        $properties = $query->paginate(12);

        return view('property.catalog', ['properties' => $properties]);
    }
    public function show(Property $property)
    {

        return view('property.showcase', ['property' => $property]);
    }
    public function createMeta()
    {
        if (!Auth::user()) {
            abort(403);
        }
        return view('property.form.metadata');
    }
    public function createMedia()
    {
        if (!Auth::user()) {
            abort(403);
        }
        return view('property.form.mediadata');
    }
    public function imageStore(Property $property, Request $request)
    {
        try {

            if ($request->hasFile('images')) {

                foreach ($request->file('images') as $image) {
                    $path = $image->store('assets/images/db', 'public');
                    PropertyImage::create([
                        'property_id' => $property->id,
                        'image_path' => $path
                    ]);
                }
            }
        } catch (Exception $e) {
            return response()->json(
                [
                    'message' => 'There has been an error in creating a new image for your property',
                    'Error' => $e
                ],
                500
            );
        }
        return response()->json(['message' => 'New Image has successefully been created'], 200);
    }
    public function videoStore(Property $property, Request $request)
    {
        try {
            if ($request->hasFile('videos')) {
                foreach ($request->file('videos') as $video) {
                    $path = $video->store('assets/videos/db', 'public');
                    PropertyVideo::create([
                        'property_id' => $property->id,
                        'video_path' => $path
                    ]);
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'There has been an error in creating a new video for your property',
                'Error' => $e
            ]);
        }
        return response()->json(['message' => 'New Image has successfully been created'], 200);
    }
    public function store(Request $request)
    {

        $sessionData = json_decode($request->input('sessionData'), true);

        if (is_array($sessionData)) {
            $validator = Validator::make($sessionData, [
                'title' => 'required|string|max:45',
                'description' => 'required|string',
                'bedrooms' => 'required|integer|max:6',
                'price' => 'required|integer|max:100000',
                'county' => 'required|string|max:15',
                'subcounty' => 'nullable|string|max:15',
                'constituency' => 'nullable|string|max:15',
                'ward' => 'nullable|string|max:15',
                'location' => 'nullable|string|max:15',
                'sublocation' => 'nullable|string|max:15',
                'village' => 'nullable|string|max:15',
            ]);

            if ($validator->fails()) {
                return redirect()->route('property.create.meta')->with('error', 'There is a field you forgot to fill');
            }
            $price = $sessionData['price'];
            $bedrooms  = $sessionData['bedrooms'];
            $title = $sessionData['title'];
            $description = $sessionData['description'];
            unset($sessionData['price'], $sessionData['bedrooms'], $sessionData['title'], $sessionData['description']);

            try {
                $location = Location::create($sessionData);
                $property = Property::create([
                    'price' => $price,
                    'bedrooms' => $bedrooms,
                    'location_id' => $location->id(),
                    'title' => $title,
                    'description' => $description,
                    'status' => 'Available',
                    'owner_id' => 1
                ]);
            } catch (Exception $e) {
                return response()->json(['Exception' => 'error'], 500);
            }
        } else {
            return response()->json(['error' => 'Invalid sessionData structure'], 422);
        }
        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {
                $path = $image->store('assets/images/db', 'public');
                PropertyImage::create([
                    'property_id' => $property->id,
                    'image_path' => $path
                ]);
            }
        }
        if ($request->hasFile('videos')) {
            foreach ($request->file('videos') as $video) {
                $path = $video->store('assets/videos/db', 'public');
                PropertyVideo::create([
                    'property_id' => $property->id,
                    'video_path' => $path
                ]);
            }
        }
        Mail::to($property->owner)->send(
            new PropertyPosted($property)
        );

        return redirect('/property/{$property->id}');
    }

    public function edit(Property $property)
    {
        return view('property.edit', ['property' => $property]);
    }

    public function update(Property $property)
    {
        $validated = request()->validate([
            'title' => 'required|string|max:45',
            'description' => 'required|string',
            'bedrooms' => 'required|integer|max:6',
            'price' => 'required|integer|max:100000',
            'county' => 'required|string|max:15',
            'subcounty' => 'nullable|string|max:15',
            'constituency' => 'nullable|string|max:15',
            'ward' => 'nullable|string|max:15',
            'location' => 'nullable|string|max:15',
            'sublocation' => 'nullable|string|max:15',
            'village' => 'nullable|string|max:15',
        ]);
        $property->update($validated);
        return redirect('/showcase/{$property->id()}');
    }
    public function destroy(Property $property)
    {
        $this->$property->delete();
        return route('property');
    }
}
