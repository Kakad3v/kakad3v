<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\PostCollection;

class PostsIndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::latest()->get();

        return inertia('index', [
            'posts' => new PostCollection($posts)
        ]);
    }
}
