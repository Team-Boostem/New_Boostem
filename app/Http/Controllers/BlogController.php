<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Storage;
//use file class
use Illuminate\Support\Facades\File;

class BlogController extends Controller {
    public function blogList() {
        //GET ALL BLOGs
        $blogs = DB::table( 'blogs' )
        ->join( 'communities', 'blogs.community_id', '=', 'communities.id' )
        ->select( 'blogs.*', 'communities.name', 'communities.tagline', 'communities.logo_photo_path' )
        ->get();
        return view( 'pages.blog.list-blog', compact( 'blogs' ) );
    }

    public function blogView( $blog_slug ) {
        //GET BLOG BY SLUG
        $blog = DB::table( 'blogs' )
        ->join( 'communities', 'blogs.community_id', '=', 'communities.id' )
        ->select( 'blogs.*', 'communities.name', 'communities.tagline', 'communities.logo_photo_path' )
        ->where( 'slug', $blog_slug )
        ->first();

        //get all comments
        $comments = DB::table( 'comments' )
        ->join( 'users', 'comments.creator', '=', 'users.user_id' )
        ->select( 'comments.*', 'users.user_id', 'users.name', 'users.username', 'users.profile_photo_path' )
        ->where( 'blog_slug', $blog_slug )
        ->get();
        // dd( $comments );

        //convert category into array
        $category = $blog->category;
        $cat_data = explode( ',', $category );
        $cat_array_data = array();
        foreach ( $cat_data as $cat ) {
            array_push( $cat_array_data, $cat );
        }

        //convert tags into array
        $tags = $blog->tags;
        $tags_data = explode( ',', $tags );
        $tags_array_data = array();
        foreach ( $tags_data as $tag ) {
            array_push( $tags_array_data, $tag );
        }
        // dd( $cat_array_data );
        page( 'blog/{username}', $blog->slug );
        return view( 'pages.blog.view-blog', compact( 'blog', 'tags_array_data', 'cat_array_data', 'comments', ) );
    }

    public function blogCreate($community_id) {
        return view( 'pages.blog.create-blog' );
    }

    public function blogCreatePost( Request $request,$community_id ) {
        $request->validate( [
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required|unique:blogs,slug,$request->slug',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ] );
        //get image save it in storage and get the path
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $name = time().'.'.$image->getClientOriginalExtension();
            //store in storage blog folder
            $path = 'storage/covers/blogs/';
            $image->move( $path, $name );
            // $this->save();
        }
        //convert category into csv
        $category = $request->post( 'category' );
        $cat_data = json_decode( $category, true );
        $cat_csv_data = collect( $cat_data )->pluck( 'value' )->implode( ',' );
        //convert tags into csv
        $tags = $request->post( 'tags' );
        $tags_data = json_decode( $tags, true );
        $tags_csv_data = collect( $tags_data )->pluck( 'value' )->implode( ',' );
        //radio public button into 01
        $radio = $request->post( 'type' );
        $yourval = ( isset( $radio ) ) ? 1 : 0;
        //save blog
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->category = $cat_csv_data;
        $blog->tags = $tags_csv_data;
        $blog->image = $name;
        $blog->slug = $request->slug;
        $blog->creator = Auth::user()->user_id;
        $blog->community_id = $community_id;
        $blog->creator_type = 'c';
        $blog->type = $yourval;
        $blog->save();
        return redirect()->route( 'blog' );

    }

    public function blogEdit($community_id,$blog_slug) {
    }

    public function blogEditPost($community_id,$blog_slug) {
    }

    public function blogDelete( $community_id,$blog_slug ) {
        
        $blog = Blog::where( 'slug', $blog_slug )->first();
        $image = $blog->image;
        $file = storage_path( 'covers\blogs\\'.$image );
        $status = File::delete( $file );
        $blog->delete();

        return redirect()->route( 'blog' );
    }
}
