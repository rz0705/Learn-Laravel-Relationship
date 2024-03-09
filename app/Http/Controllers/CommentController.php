<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::with('post')->get();
        // dd($comments);
        return view('comments',compact('comments'));
    }
    public function getCommentsByPost($postId){
        $post = Post::find($postId);
        // dd($post->comments()->get());
        $postcomments = $post->comments()->get();
        // dd($postcomments);

        return view('postcomments',compact('postcomments'));
    }
}
