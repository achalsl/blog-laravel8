<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::latest()->with('category', 'user')->get();
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
// Find a post by its slug and pass it to a view called post
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    
    return view('posts', [
        'posts' => $category->posts->load(['category', 'user'])
    ]);
});

Route::get('users/{user:username}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts->load(['category', 'user'])
    ]);
});