<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Models\RegisterRequest;

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


        RegisterRequest::create($validated);

        return redirect('/catalog')->with('message', 'Your request has been sent to the admin of the website please wait as he confirms your identity and upgrade you to a user');
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
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();
            $user = User::where('email', $socialUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'avatar' => $socialUser->getAvatar(),
                ]);
            }

            Auth::login($user);

            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error('Socialite error', ['error' => $e->getMessage()]);
            dd($e, $e->getMessage());
            return redirect()->route('login')->withErrors(['error' => 'Something went wrong!']);
        }
    }
}
