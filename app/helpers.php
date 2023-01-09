<?php

use App\Models\Community;
use App\Models\User;
use App\Models\PageView;
use App\Models\Save;
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

function profileview($profile_id)
{
    $count = PageView::where('profile_id', $profile_id)->count();
    return $count;
}

function saveBlog($blog_slug)
{
    //check if user has already saved this blog
    $check = Save::where('user_id', Auth::user()->user_id)->where('page_id', $blog_slug)->where('page_type', 'blog')->first();
    if ($check) {
        //delete the save
        $check->delete();
        //call checkBlogSave to run
        // checkBlogSave($blog_slug);
        return;
    }else{
        //save the blog
        $save = new Save();
        $save->page_id = $blog_slug;
        $save->user_id = Auth::user()->user_id;
        $save->page_type = 'blog';
        $save->save();
        //call checkBlogSave to run
        // checkBlogSave($blog_slug);
    }
    
}
function checkBlogSave($blog_slug)
{
    //check if user has already saved this blog
    $check = Save::where('user_id', Auth::user()->user_id)->where('page_id', $blog_slug)->where('page_type', 'blog')->first();
    if($check){
        return true;
    }else{
        return false;
    }
}

function save(){

    $blog_slug = $_POST['blog_slug'];
    $save = new Save();
    $save->page_id = $blog_slug;
    $save->user_id = Auth::user()->user_id;
    $save->page_type = 'blog';
    $save->save();
    echo "Blog saved";
}

function subscribeNewsletter(){

    $blog_slug = $_POST['blog_slug'];
    $save = new Save();
    $save->page_id = $blog_slug;
    $save->user_id = Auth::user()->user_id;
    $save->page_type = 'blog';
    $save->save();
    echo "Blog saved";
}


?>