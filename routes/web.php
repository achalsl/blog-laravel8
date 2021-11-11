<?php

use App\Models\Post;
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
    $document = YamlFrontMatter::parseFile(resource_path('posts/my-third-post.html'));
    $posts[] = new Post(
        $document->title,
        $document->excerpt,
        $document->date,
        $document->body()
    );
    return view('posts', [
        'posts' => Post::findAll()
    ]);
});

Route::get('posts/{post}', function ($slug) {
// Find a post by its slug and pass it to a view called post
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');