<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyImage;

class PropertyImageController extends Controller
{
    public function destroy(PropertyImage $propertyImage)
    {
        $propertyImage->delete();
        return response()->json(['message' => 'Image successfully Deleted']);
    }
}
