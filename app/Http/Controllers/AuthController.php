<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\RegisterRequest;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect()->back();
        }
        return view('auth.login');
    }
    public function logout()
    {
        $this->authorize('logged', Auth::user());
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
    public function signup()
    {
        if (Auth::user()) {
            return redirect()->back();
        }
        return view('auth.signup');
    }
    public function register()
    {
        $validated = request()->validate([
            'first_name' => ['required', 'min:4'],
            'last_name' => ['required', 'min:4'],
            'phone_number' => ['required', 'min:10', 'max:10'],
            'username' => ['unique:users', 'required', 'min:4'],
            "email" => ['unique:users', 'required', 'min:11', 'max:254'],
            "password" => ['min:8']
        ]);


        RegisterRequest::create($validated);

        return redirect('/property')->with('message', 'Your request has been sent to the admin of the website please wait as he confirms your identity and upgrade you to a user');
    }
    public function session()
    {
        $validated = request()->validate([
            'username_email' => ['required'],
            'password' => ['required']
        ]);

        $credentials = filter_var($validated['username_email'], FILTER_VALIDATE_EMAIL)
            ? ['email' => $validated['username_email'], 'password' => $validated['password']]
            : ['username' => $validated['username_email'], 'password' => $validated['password']];

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'username_email' => 'Sorry, those credentials do not match our records.'
            ]);
        }
        if (Auth::user()['role'] === 'Admin') {
            return redirect()->route('dashboard');
        }

        request()->session()->regenerate();

        return redirect()->route('property');
    }


    public function destory($id)
    {
        if (Auth::user()['role'] === 'Admin') {
            return redirect()->route('dashboard');
        }
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['success' => 'User was deleted successfully'], 200);
    }
}
