<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::with('userProfile')->get();
        // dd($users);
        return view('users', compact('users'));
    }
}
