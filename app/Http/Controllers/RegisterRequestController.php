<?php

namespace App\Http\Controllers;

use App\Models\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;

class RegisterRequestController extends Controller
{

    public function show()
    {
        return view('admin.register_request', ['requests' => RegisterRequest::all()]);
    }
    public function accept_request(RegisterRequest $registerRequest)
    {
        $attributes = $registerRequest->validated();

        try {
            User::create($attributes);

            return response()->json([
                'success' => true,
                'message' => 'User created successfully.'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function deny_request(RegisterRequest $registerRequest)
    {
        try {
            $registerRequest->delete();
        } catch (Exception $e) {
            return response()->json(['Error' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'The request was denied successfully'], 200);
    }
}
