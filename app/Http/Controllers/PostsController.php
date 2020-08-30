<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'firstpost' => 'this is first post',
            'secondpost' => 'this is second post'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404);
        }

        return view('post', [
            'post' => $posts[$post] ?? 'Nothing :P'
        ]);
    }
}
