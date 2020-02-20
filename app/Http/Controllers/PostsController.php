<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'first' => 'This is the first',
            'second' => 'Wow! The second!'
        ];

        if (! array_key_exists($post, $posts)) {
            abort(404, 'Shit. No post found.');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
