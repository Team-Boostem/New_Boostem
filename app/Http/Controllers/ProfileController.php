<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{

    public function viewUser($user_id)
    {
        $user = User::where('user_id', $user_id)->first();

        if ($user) {
            $socials = $user->socials;
            $result = compact('user', 'socials');

            if (Auth::user()->user_id == $user->user_id) {
                return view('pages.profile.admin-profile', )->with($result);
            } else {
                page('user/{username}', $user->username);
                return view('pages.profile.profile', )->with($result);
            }
        } else {
            return view('pages.error.not-found');
        }
    }
    public function editUser($username)
    {
        return view('pages/user', [
            'user' => User::where('username', $username)->firstOrFail(),
            'pageViews' => PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function editUserPost($username)
    {
        return view('pages/user', [
            'user' => User::where('username', $username)->firstOrFail(),
            'pageViews' => PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function settingsUser($username)
    {
        return view('pages/user', [
            'user' => User::where('username', $username)->firstOrFail(),
            'pageViews' => PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
}