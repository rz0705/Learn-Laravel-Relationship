<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->get();
        // dd($posts);
        return view('posts', compact('posts'));
    }

    public function getUserPosts($userId){
        // dd($userId);
        $user = User::find($userId);
        $userposts = $user->posts;
        // dd($userposts);

        return view('userposts', compact('userposts'));
    }

    public function getLatestPostFirst($userId){
        $user = User::find($userId);
        $userlatestpost = $user->getlatestpostfirst()->get();
        // dd($userlatestpost);

        return view('latestposts',compact('userlatestpost'));
    }
}
