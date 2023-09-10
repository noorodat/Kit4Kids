<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
         return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {

        $provider_user = Socialite::driver($provider)->stateless()->user();

        // $user = User::where([
        //     'email' => $provider_user->email
        // ])->first();

        // if (!$user) {
        //     User::create([
        //         'name' => $provider_user->name,
        //         'email' => $provider_user->email,
        //         // 'password' => Hash::make(Str::random(8)),
        //     ]);
        // }
        
        $UserName = $provider_user->name;
        if ($UserName == null) {
            $UserName = $provider_user->nickname;
        }
        
        $user = User::updateOrCreate([
            'provider_id' => $provider_user->id,
            'provider' => $provider,
        ], [
            'name' => $UserName,
            'email' => $provider_user->email,
        ]);

        Auth::login($user);

        return redirect('/pages');
    }
}
