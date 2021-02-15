<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {

        //$post = DB::table('posts')->where('slug', $slug)->first();

        /* Manual Way
        $posts = [
            'one-post' => 'Hey this is one post',
            'two-post' => 'Hey this is a second post'
        ];


        if (! array_key_exists($post, $posts)) {
            abort(403, 'sorry bro');
        };
        */

        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
