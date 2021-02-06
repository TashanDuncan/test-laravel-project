<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'one-post' => 'Hey this is one post',
            'two-post' => 'Hey this is a second post'
        ];
    
        if (! array_key_exists($post, $posts)) {
            abort(403, 'sorry bruh');
        };
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
