<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::with('post')->get();
        // dd($comments);
        return view('comments',compact('comments'));
    }
}
