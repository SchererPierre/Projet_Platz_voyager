<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts.index', ['posts' => \App\Models\Post::paginate(20)]);
})->name('posts.index');

Route::get('posts/{post}', function ( \App\Models\Post $post) {
    return view('posts.show', compact('post'));
})->name('posts.show');

Route::get('posts/{post}', function (\App\Models\Post $post) {
    $comments = $post->comments;
    return view('posts.show', compact('post'), compact('comments'));
})->name('posts.show');

Route::get('category/{id}', function ($id) {
    $posts = Category::find($id)->posts()->paginate(10);
    return view('posts.index', ['posts' => $posts]);
})->name('categories.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
