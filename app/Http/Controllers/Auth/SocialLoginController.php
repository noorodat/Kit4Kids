<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
         return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $provider_user = Socialite::driver($provider)->stateless()->user();

        $user = User::where([
            'email' => $provider_user->email
        ])->first();

        if (!$user) {
            User::create([
                'name' => $provider_user->name,
                'email' => $provider_user->email,
                'password' => Hash::make(Str::random(8)),
            ]);
        }

    }
}
