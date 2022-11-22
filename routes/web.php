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
    return view('posts.index', ['posts' => \App\Models\Post::all()]);
})->name('posts.index');

Route::get('posts/{post}', function ( \App\Models\Post $post) {
    return view('posts.show', compact('post'));
})->name('posts.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
