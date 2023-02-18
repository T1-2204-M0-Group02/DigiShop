<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            
            $user = User::where([
                'provider' => $provider,
                'provider_id' => $socialUser->id
            ])->first();
            if (!$user) {
                if (User::where('email', $socialUser->getEmail())->exists()) {
                    return redirect('/login')->withErrors(['email' => 'This email uses different method to login.']);
                }
                $password = Str::random(12);
                $user = User::create([
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'provider' => $provider,
                    'provider_id' => $socialUser->id,
                    'provider_token' => $socialUser->token,
                    'password' => $password
                ]);
                $user->sendEmailVerificationNotification();
                $user->update([
                    'password' => Hash::make($password)
                ]);
            }
        } catch(\Exception $e) {
            return redirect('/login');
        }

        Auth::login($user);

        return redirect('/dashboard');
    }
}
