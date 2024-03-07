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

    // public function byid(){
    //     $user = User::find(33); // Assuming the user with ID 1 exists
    //     // dd($user);
    //     $posts = $user->posts;

    //     dd($posts);
    // }
}
