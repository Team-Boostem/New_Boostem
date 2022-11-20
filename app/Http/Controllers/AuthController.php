<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Socialite;
use Auth;

class AuthController extends Controller {
    public function redirectToGoogle() {
        return Socialite::driver( 'google' )->redirect();
    }

    public function handdleGoogleCallBack() {
        $google_user = Socialite::driver( 'google' )->user();
        $user = User::where( 'google_id', $google_user->getId() )->first();

        if ( !$user) {
            $user = User::create( [
                'name' => $google_user->name,
                'email' => $google_user->email,
                'google_id'=> $google_user->getId(),
            ] );
            Auth::login( $user,true );
            return redirect()->route( 'dashboard' );
        } else {
            Auth::login( $user,true );
            return redirect()->route( 'dashboard' );
        }
    }
}
