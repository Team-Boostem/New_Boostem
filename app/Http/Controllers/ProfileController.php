<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\PageView;
use App\Models\Community;

class ProfileController extends Controller
{

    public function viewProfile($user_id)
    {
        $user = User::where('user_id', $user_id)->first();
        if ($user) {
            $socials = $user->socials;
            $pageViews = PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get();
            $communities = Community::where('creator', $user->user_id)->get();
            $result = compact('user', 'socials', 'communities', 'pageViews');
            if (Auth::user()->user_id == $user->user_id) {
                return view('pages.profile.profile', )->with($result);
            } else {
                page('user/{username}', $user->username);
                return view('pages.profile.profile', )->with($result);
            }
        } else {
            return view('pages.error.not-found');
        }
    }

    public function editProfile($username)
    {
        return view('pages/user', [
            'user' => User::where('username', $username)->firstOrFail(),
            'pageViews' => PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function editProfilePost($username)
    {
        return view('pages/user', [
            'user' => User::where('username', $username)->firstOrFail(),
            'pageViews' => PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
    public function settingsProfile($username)
    {
        return view('pages/user', [
            'user' => User::where('username', $username)->firstOrFail(),
            'pageViews' => PageView::where('page', 'user/{username}')->where('profile_id', $user->user_id)->orderBy('created_at', 'desc')->get(),
        ]);
    }
}
