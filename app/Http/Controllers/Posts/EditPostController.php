<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use App\Policies\Posts\PostPolicy;
use App\Http\Controllers\Controller;

class EditPostController extends Controller
{
    public function __invoke(Post $post)
    {
        $this->authorize(PostPolicy::ADMINISTER, $post);

        return inertia('posts/edit', compact('post'));
    }
}
