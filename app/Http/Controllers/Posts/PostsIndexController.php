<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostsIndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::latest()->get();

        return inertia('index', compact('posts'));
    }
}