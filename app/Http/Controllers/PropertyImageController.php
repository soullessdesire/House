<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyImage;

class PropertyImageController extends Controller
{
    public function destroy(PropertyImage $propertyImage)
    {
        $this->authorize('delete', $propertyImage->property());
        $propertyImage->delete();
        return response()->json(['success' => 'Image successfully Deleted']);
    }
}
