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

Route::view('/', 'welcome');
Route::view('/welcome2', 'welcome2');


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
Route::get('/tickets/{ticket}', 'ticketController@show');
Route::get('/tickets/{ticket}', 'ticketController@show');


Route::get('/about', function (){
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
}) ;

/*Route::get('/articles/', function (){
    return view('articles', [
        'articles' => App\article::paginate(5)
    ]);
}) ;
*/

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
