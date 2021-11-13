<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\PostResource;

class PostShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return inertia('posts/show', [
            'post' => new PostResource($post)
        ]);
    }
}
