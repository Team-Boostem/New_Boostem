<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\PageView;
use App\Models\Community;
use File;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller {

    public function viewProfile( $user_id ) {
        $user = User::where( 'user_id', $user_id )->first();
        if ( $user ) {
            $socials = $user->socials;
            $pageViews = PageView::where( 'page', 'user/{username}' )->where( 'profile_id', $user->username )->get();
            $pageViewsCount = $pageViews->count();
            $communities = Community::where( 'creator', $user->user_id )->get();
            $result = compact( 'user', 'socials', 'communities', 'pageViewsCount' );
            if ( Auth::user()->user_id == $user->user_id ) {
                return view( 'pages.profile.profile', )->with( $result );
            } else {
                page( 'user/{username}', $user->username );
                return view( 'pages.profile.profile', )->with( $result );
            }
        } else {
            return view( 'pages.error.not-found' );
        }
    }

    public function updateProfileImg() {
        try {
            if ( isset( $_POST[ 'image' ] ) ) {
                $data = $_POST[ 'image' ];
                $image_array_1 = explode( ';', $data );
                $image_array_2 = explode( ',', $image_array_1[ 1 ] );
                $data = base64_decode( $image_array_2[ 1 ] );
                $imageName = time() . '.png';
                \File::put( storage_path( '\user\profile\profile' ). $imageName, $data );

                $user = User::where( 'user_id', Auth::user()->user_id )->first();
                $path = $user->profile_photo_path;
                if ( $path != 'storage/user/profile/avtar1.png' && $path != 'storage/user/profile/avtar2.png' && $path != 'storage/user/profile/avtar3.png' && $path != 'storage/user/profile/avtar4.png' && $path != 'storage/user/profile/avtar5.png' && $path != 'storage/user/profile/avtar6.png' ) {
                    File::Delete( $path );
                }
                $user->profile_photo_path = 'storage/user/profile/profile'.$imageName;
                $user->update();
                echo 'done';
            }
        } catch ( \Throwable $th ) {
            //throw $th;
            echo $th;
        }
    }

    public function updateProfileBanner() {
        try {
            if ( isset( $_POST[ 'image' ] ) ) {
                $data = $_POST[ 'image' ];
                $image_array_1 = explode( ';', $data );
                $image_array_2 = explode( ',', $image_array_1[ 1 ] );
                $data = base64_decode( $image_array_2[ 1 ] );
                $imageName = time() . '.png';
                \File::put( storage_path( '\user\banner\banner' ). $imageName, $data );

                $user = User::where( 'user_id', Auth::user()->user_id )->first();
                $path = $user->cover_photo_path;
                if ( $path != 'storage/user/banner/banner1.png' && $path != 'storage/user/banner/banner2.png' && $path != 'storage/user/banner/banner3.png' ) {
                    File::Delete( $path );
                }
                $user->cover_photo_path = 'storage/user/banner/banner'.$imageName;
                $user->update();
                echo 'done';
            }
        } catch ( \Throwable $th ) {
            //throw $th;
            echo $th;
        }
    }

    public function editProfile( $username ) {
        return view( 'pages/user', [
            'user' => User::where( 'username', $username )->firstOrFail(),
            'pageViews' => PageView::where( 'page', 'user/{username}' )->where( 'profile_id', $user->user_id )->orderBy( 'created_at', 'desc' )->get(),
        ] );
    }

    public function editProfilePost( $username ) {
        return view( 'pages/user', [
            'user' => User::where( 'username', $username )->firstOrFail(),
            'pageViews' => PageView::where( 'page', 'user/{username}' )->where( 'profile_id', $user->user_id )->orderBy( 'created_at', 'desc' )->get(),
        ] );
    }

    public function settingsProfile( $username ) {
        return view( 'pages/user', [
            'user' => User::where( 'username', $username )->firstOrFail(),
            'pageViews' => PageView::where( 'page', 'user/{username}' )->where( 'profile_id', $user->user_id )->orderBy( 'created_at', 'desc' )->get(),
        ] );
    }
}
