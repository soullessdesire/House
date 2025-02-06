<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyVideo;

class PropertyVideoController extends Controller
{
    public function delete(PropertyVideo $propertyVideo)
    {
        $this->authorize('delete', $propertyVideo->property());
        $propertyVideo->delete;
        return response()->json(['success' => "The video has been deleted"], 200);
    }
}
