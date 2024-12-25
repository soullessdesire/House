<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function signup()
    {
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

        // dd($validated);
        $user = User::create($validated);

        Auth::login($user);

        return redirect('/catalog');
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

        request()->session()->regenerate();

        return redirect('/catalog');
    }
}
