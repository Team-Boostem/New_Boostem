<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;

class CommentController extends Controller
{
    public function addComment(Request $request,$blog_slug)
    {
        $request->validate([
            'msg' => 'required',
        ]);

        $comment = new Comment();
        $comment->msg = $request->msg;
        $comment->blog_slug = $blog_slug;
        $comment->creator = Auth::user()->user_id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }
    public function removeComment($comment_id){
        $comment = Comment::where('id',$comment_id)->first();
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully');

    }

}
