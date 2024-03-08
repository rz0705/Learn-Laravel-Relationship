<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('users', [UserController::class, 'index']);

Route::get('user/{id}/posts', [PostController::class, 'getUserPosts'])->name('getUserPosts');

Route::get('posts', [PostController::class, 'index']);

Route::get('user/{id}/posts/latest', [PostController::class, 'getLatestPostFirst'])->name('getLatestPostFirst');