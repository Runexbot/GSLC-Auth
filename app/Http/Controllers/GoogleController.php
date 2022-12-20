<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Psy\Util\Str;

class GoogleController extends Controller
{
    public function login()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email', $google_user->email)->first();

            if($user){
                Auth::login($user);
                return redirect(route('dashboard'));
            }
            else {
                $new_user = User::create([
                    'name' => ucwords($google_user->name),
                    'email' => $google_user->email,
                    'email_verified_at' => now(),
                    'password' => 0,
                    'remember_token' => 'sdjskldjsd'
                ]);

                Auth::login($new_user);
                return redirect(route('dashboard'));
            }

        } catch (\Throwable $th) {
            abort(404);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
