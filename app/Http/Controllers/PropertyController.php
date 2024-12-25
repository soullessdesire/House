<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;

class PropertyController extends Controller
{
    public function create()
    {
        return view('post-a-rental-form');
    }
    public function show(Property $property)
    {
        return view('showcase', ['property', $property]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([]);
        $property = Property::create($validated);

        return redirect('/showcase/{$property->id()}', 200);
    }
    public function edit(Property $property)
    {
        return view('', ['property' => $property]);
    }
    public function update(Property $property)
    {
        $validated = request()->validate([
            //code
        ]);
        $property->update($validated);
        return redirect('/showcase/{$property->id()}');
    }
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect('/post-a-rental-form');
    }
}
