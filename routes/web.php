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
    return view('welcome');
});

Route::get('test', function () {
   return view('test', ['name' => request('name')]);
});

/*Route::get('/posts/{post}', function ($post) {
    $posts = [
        'one-post' => 'Hey this is one post',
        'two-post' => 'Hey this is a second post'
    ];

    if (! array_key_exists($post, $posts)) {
        abort(403, 'sorry bro');
    };

    return view('post', [
        'post' => $posts[$post]
    ]);
 });
*/

Route::get('/posts/{post}', 'PostsController@show');
Route::get('/tickets/{ticket}', 'ticketsController@show');
