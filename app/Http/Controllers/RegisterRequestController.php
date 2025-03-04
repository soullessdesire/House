<?php

namespace App\Http\Controllers;

use App\Models\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class RegisterRequestController extends Controller
{

    public function show()
    {
        $this->authorize('admin', Auth::user());
        return view('admin.register_request', ['requests' => RegisterRequest::all()]);
    }
    public function accept_request($registerrequest)
    {
        $this->authorize('admin', Auth::user());

        try {

            $registerRequest = RegisterRequest::findOrFail($registerrequest);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        try {
            User::create(
                [
                    'email' => $registerRequest->email,
                    'password' => $registerRequest->password,
                    'username' => $registerRequest->username,
                    'role' => 'User',
                    'first_name' => $registerRequest->first_name,
                    'last_name' => $registerRequest->last_name,
                    'phone_number' => $registerRequest->phone_number
                ]
            );

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
        $this->authorize('admin', Auth::user());
        try {
            $registerRequest->delete();
        } catch (Exception $e) {
            return response()->json(['Error' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'The request was denied successfully'], 200);
    }
}
