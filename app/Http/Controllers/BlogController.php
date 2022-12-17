<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList() {
    }
    public function blogView() {
        return view('pages.blog.view-blog');
    }
    public function blogCreate() {
        return view('pages.blog.create-blog');
    }
    public function blogCreatePost() {
    }
    public function blogEdit() {
    }
    public function blogEditPost() {
    }
}
