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
        $location = request()->input('location');
        $sublocation = request()->input('sublocation');
        $village = request()->input('village');
        $budget = request()->input('budget');
        $bedrooms = request()->input('bedrooms', []);

        $filters = [
            'county' => $county,
            'subcounty' => $subcounty,
            'constituency' => $constituency,
            'ward' => $ward,
            'location' => $location,
            'sublocation' => $sublocation,
            'village' => $village
        ];


        $query = Property::query();
        $query->whereHas('location', function ($query) use ($filters) {
            foreach ($filters as $column => $value) {
                if (!empty($value)) {
                    if (in_array($column, ['location', 'sublocation', 'village'])) {
                        $query->where($column, 'LIKE', '%' . $value . '%');
                    } else {
                        $query->where($column, $value);
                    }
                }
            }
        });


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
        try {

            $this->authorize('logged', Auth::user());
            return view('property.form.metadata');
        } catch (Exception $e) {
            return redirect()->route('/login')->with('error', 'You must be logged in for you to access this page');
        }
    }
    public function storeMeta(Request $request)
    {
        try {
            $this->authorize('logged', Auth::user());
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'You must be logged in to perform this function');
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:45',
            'description' => 'required|string',
            'bedrooms' => 'required',
            'price' => 'required|integer',
            'county' => 'required|string',
            'subcounty' => 'nullable|string',
            'constituency' => 'nullable|string',
            'ward' => 'nullable|string',
            'location' => 'nullable|string|max:15',
            'sublocation' => 'nullable|string|max:15',
            'village' => 'nullable|string|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->route('property.create.meta')
                ->withErrors($validator)
                ->withInput();
        }

        session([
            'property_meta' => $request->only([
                'title',
                'description',
                'bedrooms',
                'price',
                'county',
                'subcounty',
                'constituency',
                'ward',
                'location',
                'sublocation',
                'village'
            ])
        ]);

        return redirect()->route('property.create.media');
    }
    public function createMedia()
    {
        try {

            $this->authorize('logged', Auth::user());
            return view('property.form.mediadata');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'You must be logged in to access this page');
        }
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
        try {

            $this->authorize('logged', Auth::user());
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'You must be logged in to perform this function');
        }
        $meta = session('property_meta');

        if (!$meta) {
            return redirect()->route('property.create.meta')->with('error', 'Session expired. Please re-enter property details.');
        }
        try {
            $location = Location::create([
                'county' => $meta['county'],
                'subcounty' => $meta['subcounty'],
                'constituency' => $meta['constituency'],
                'ward' => $meta['ward'],
                'location' => $meta['location'],
                'sublocation' => $meta['sublocation'],
                'village' => $meta['village']
            ]);

            $property = Property::create([
                'price' => $meta['price'],
                'bedrooms' => $meta['bedrooms'],
                'location_id' => $location->id,
                'title' => $meta['title'],
                'description' => $meta['description'],
                'status' => 'Available',
                'owner_id' => Auth::id()
            ]);
            session()->forget('property_meta');
        } catch (Exception $e) {
            dd($e);
            return response()->json(['Exception' => 'error'], 500);
        }
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

        return redirect("/property/{$property->id}")->with('success', 'You have created a new property successfully');
    }

    public function edit(Property $property)
    {
        return view('property.edit', ['property' => $property]);
    }

    public function update(Property $property)
    {
        try {

            $this->authorize('update', $property);
        } catch (Exception $e) {
            return redirect()->route('/login')->with('error', 'You must be logged in as admin or property owner to update this property');
        }
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
        return redirect("/showcase/{$property->id()}");
    }
    public function destroy(Property $property)
    {
        try {
            $this->authorize('delete', $property);
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'You must be logged in as the property owner or admin to delete a property');
        }
        $property->delete();
        return route('property');
    }
}
