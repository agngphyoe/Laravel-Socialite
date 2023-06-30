<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class OAuthController extends Controller
{
    public function redirect(Request $request){
       switch ($request->type) {
        case 'github':
            return Socialite::driver('github')->stateless()->redirect();
            break;       
       
        case 'google':
            return Socialite::driver('google')->stateless()->redirect();

        case 'discord':
            return Socialite::driver('discord')->stateless()->redirect();

        case 'bitbucket':
            return Socialite::driver('bitbucket')->stateless()->redirect();
       }      
    }

    //Redirect function from github
    public function githubCallback() {
        $user = Socialite::driver('github')->stateless()->user();

        return view ('index', ['user' => $user]);
    }

    //Redirect function from google
    public function googleCallback() {
        $user = Socialite::driver('google')->stateless()->user();
        
        return view ('index', ['user' => $user]);
    }

    //Redirect function from discord
    public function discordCallback() {
        $user = Socialite::driver('discord')->stateless()->user();
        
        return view ('index', ['user' => $user]);
    }

    //Redirect function from bitbucket
    public function bitbucketCallback(){
        $user = Socialite::driver('bitbucket')->stateless()->user();
        
        return view ('index', ['user' => $user]);
    }
}
