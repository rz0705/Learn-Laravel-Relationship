<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Http\Requests\UpdatePostsRequest;
use App\Http\Requests\StorePostsRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get(); //run less query
        // $posts = Post::get(); //run query for every post
        // dd($posts);
        // dd($posts[0]->user);
        return view('posts', compact('posts'));
    }

    public function getUserPosts($userId){
        // dd($userId);
        $user = User::find($userId);
        $userposts = $user->posts;
        // dd($userposts);

        return view('userposts', compact('userposts'));
    }
}
