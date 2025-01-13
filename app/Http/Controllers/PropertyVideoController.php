<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyVideo;
use App\Models\Property;

class PropertyVideoController extends Controller
{
    public function delete(PropertyVideo $propertyVideo)
    {
        $propertyVideo->delete;
        return response()->json(['message' => "The video has been deleted"], 200);
    }
}
