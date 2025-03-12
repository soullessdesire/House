<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\PropertyVideo;

class PropertyVideoController extends Controller
{
    public function delete(PropertyVideo $propertyVideo)
    {
        $this->authorize('delete', $propertyVideo->property());
        try {

            $propertyVideo->delete;
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'We have encountered an error in deleting your Video please try again');
        }
        return redirect()->route('property.edit', ['property' => $propertyVideo->property_id])->with('success', 'We have successfully deleted your video');
    }
}
