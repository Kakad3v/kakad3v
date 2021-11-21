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
        $request->validate([
            'title' => ['required', 'max:100'],
            'image_url' => ['required', 'image'],
            'body' => ['required', 'min:50'],
        ]);

        $post = auth()->user()->posts()->create(
            [
            'title' => $request->title,
            'body' => $request->body,
            'title' => $request->title,
            'image_url' => $request->file('image_url') ? $request->file('image_url')->store('post-images', 'public') : null,
            ]
        );

        broadcast(new PostAdded($post));
        
        return Redirect::route('posts.index')->with('success', 'Post was created');
    }
}
