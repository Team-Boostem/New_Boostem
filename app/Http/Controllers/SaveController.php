<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use Auth;


//use DB to save blog

class SaveController extends Controller
{
    
    public function saveblog(){
        
        $blog_slug = $_POST['blog_slug'];
        //save this blog theough save model
        $save = new Save();
        $save->page_id = $blog_slug;
        $save->user_id = Auth::user()->user_id;
        $save->page_type = 'blog';
        $save->save();
        echo "Blog saved abhi";

        
    }

}
