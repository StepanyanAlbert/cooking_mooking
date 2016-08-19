<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
class LoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::with($provider)->user();
        if(User::findorCreateSocialUser($provider,$user->id,$user) =='message')
        {
          return  redirect()->route('welcome')->with(['message'=>trans('auth.Please sign in with another account / Email must be unique')]);
        }
        Auth::login(User::findorCreateSocialUser($provider,$user->id,$user));
        return redirect()->route('home.dashboard');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
