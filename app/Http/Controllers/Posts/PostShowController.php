<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Policies\Posts\PostPolicy;

class PostShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return inertia('posts/show', compact('post'));
    }
}

