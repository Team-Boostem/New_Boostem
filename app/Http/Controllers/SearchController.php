<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SearchController extends Controller
{
    public function search()
    {
        try {
            $search = $_POST['search'];
            $blog = Blog::where('title', 'like', '%'.$search.'%')->paginate(5);
            $com_blog = compact('blog');
            echo json_encode($blog);
            // echo "hii";
            //set the blog in response.data of the ajax request

        }  catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }

        // $blog = Blog::where('title', 'like', '%'.$search.'%')->paginate(5);
        // return view('posts.index', compact('posts'));
    }
}
