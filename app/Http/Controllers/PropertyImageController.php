<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyImage;
use Exception;

class PropertyImageController extends Controller
{
    public function destroy(PropertyImage $propertyImage)
    {
        $this->authorize('delete', $propertyImage->property());

        try {

            $propertyImage->delete();
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'We have encountered an error in deleting you image please try again');
        }
        return redirect()->route('property.edit')->with('success', 'We have successfully deleted your image');
    }
}
