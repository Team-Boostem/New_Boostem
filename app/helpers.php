<?php

use App\Models\Community;
use App\Models\User;
use App\Models\PageView;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;

//get all communities where creator is equal to auth()->user()->user_id
// $mycommunities = Community::where( 'creator', Auth::user()->user_id )->get();
// $mycommunities->setAsGlobal();

function page($page, $profile_id = null)
{
    $p = new PageView();
    if (Auth::check()) {
        $p->user_id = Auth::user()->user_id;
    }
    $p->page = $page;
    $p->profile_id = $profile_id;
    $p->ip_address = request()->ip();
    $p->user_agent = request()->header('User-Agent');
    $p->save();
}


?>