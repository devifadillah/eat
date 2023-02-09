<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // googleauth
    public function googleredirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback(Request $request)
    {
        $userdata = Socialite::driver('google')->user();

        $user = User::where('email',$userdata->email)->where('auth_type','google')->first();
        if($user)
        {
            // do login
            Auth::login($user);
            return redirect('/gedung/fash');
        }
        else{
        // dd($userdata);
        $uuid = Str::uuid()->toString();

        $user =new user();
        $user->name =$userdata->name;
        $user->email =$userdata->email;
        $user->password =Hash::make($uuid.now());
        $user->auth_type ='google';
        $user->save();
        Auth::login($user);
        return redirect('/gedung/fash');
        }

    }
}
