<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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
    use AuthorizesRequests;
    private $title = null;
    private $description = null;
    private $price = null;
    private $county = null;
    private $subcounty = null;
    private $constituency = null;
    private $bedrooms = null;
    private $ward = null;
    private $location = null;
    private $sublocation = null;
    private $village = null;


    public function index()
    {
        $county = request()->input('county');
        $constituency = request()->input('constituency');
        $subcounty = request()->input('subcounty');
        $ward = request()->input('ward');
        $location = request()->input('locaation');
        $sublocation = request()->input('sublocation');
        $village = request()->input('village');
        $budget = request()->input('budget');
        $bedrooms = request()->input('bedrooms', []);


        $query = Property::query();

        if ($county) {
            $query->whereHas('location', function ($query) use ($county, $subcounty, $constituency, $ward, $location, $sublocation, $village) {
                $query->where('county', $county);
                $query->where('subcounty', $subcounty);
                $query->where('constituency', $constituency);
                $query->where('ward', $ward);
                $query->where('location', $location);
                $query->where('sublocation', $sublocation);
                $query->where('village', $village);
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



        return view('property.catalog', ['properties' => $properties, 'counties' => LocationController::getCounties(), 'wards' => LocationController::getWards(), 'constituencies' => LocationController::getCounstituency(), 'subcounties' => LocationController::getSubCounties()]);
    }
    public function show(Property $property)
    {

        return view('property.showcase', ['property' => $property]);
    }
    public function createMeta()
    {
        $this->authorize('logged', Auth::user());
        return view('property.form.metadata');
    }
    public function storeMeta(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
            return redirect()->route('property.create.meta')
                ->withErrors($validator)
                ->withInput();
        }

        $this->title = $request->input('title');
        $this->price = $request->input('price');
        $this->bedrooms = $request->input('bedrooms');
        $this->description = $request->input('description');
        $this->county = $request->input('county');
        $this->subcounty = $request->input('subcounty');
        $this->constituency = $request->input('constituency');
        $this->ward = $request->input('ward');
        $this->location = $request->input('location');
        $this->sublocation = $request->input('sublocation');
        $this->village = $request->input('village');

        return redirect()->route('property.create.media');
    }
    public function createMedia()
    {
        $this->authorize('logged', Auth::user());
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
        $this->authorize('logged', Auth::user());
        try {
            $location = Location::create([
                'county' => $this->county,
                'subcounty' => $this->subcounty,
                'constituency' => $this->constituency,
                'ward' => $this->ward,
                'location' => $this->location,
                'sublocation' => $this->sublocation,
                'village' => $this->village
            ]);
            $property = Property::create([
                'price' => $this->price,
                'bedrooms' => $this->bedrooms,
                'location_id' => $location->id,
                'title' => $this->title,
                'description' => $this->description,
                'status' => 'Available',
                'owner_id' => Auth::id()
            ]);
        } catch (Exception $e) {
            return response()->json(['Exception' => 'error'], 500);
        }
        $this->imageStore($property, $request);
        $this->videoStore($property, $request);
        Mail::to($property->owner)->send(
            new PropertyPosted($property)
        );

        return redirect('/property/{$property->id}');
    }

    public function edit(Property $property)
    {
        $this->authorize('update', $property);
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
        $this->authorize('delete', $property);
        $property->delete();
        return route('property');
    }
}
