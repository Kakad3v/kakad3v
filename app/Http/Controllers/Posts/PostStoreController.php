<?php

namespace App\Http\Controllers\Posts;

use App\Events\PostAdded;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PostStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $post = auth()->user()->posts()->create(
            $request->validate([
                'title' => ['required', 'max:100'],
                'image_url' => ['required', 'url'],
                'body' => ['required', 'min:50'],
            ])
        );

        broadcast(new PostAdded($post));
        
        return Redirect::route('posts.index')->with('success', 'Post was created');
    }
}
