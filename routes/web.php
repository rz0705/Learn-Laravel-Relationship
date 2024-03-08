<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('users');
});

Route::get('users', [UserController::class, 'index'])->name('users');

Route::get('user/{id}/posts', [PostController::class, 'getUserPosts'])->name('getUserPosts');

Route::get('posts', [PostController::class, 'index'])->name('posts');

Route::get('user/{id}/posts/latest', [PostController::class, 'getLatestPostFirst'])->name('getLatestPostFirst');

Route::get('comments', [CommentController::class, 'index'])->name('comments');