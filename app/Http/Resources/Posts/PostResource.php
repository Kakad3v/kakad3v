<?php

namespace App\Http\Resources\Posts;

use App\Policies\Posts\PostPolicy;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Posts\EditPostController;
use App\Http\Controllers\Posts\PostShowController;
use App\Http\Resources\Users\UserResource;

/** @mixin \App\Models\User */
class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'src' => $this->image(),
            'user' => new UserResource($this->user),
            
            'can' => [
                PostPolicy::ADMINISTER => auth()->user()->can(PostPolicy::ADMINISTER, $this->resource)
            ],

            'links' => [
                'show' => action(PostShowController::class, $this->resource),
                'edit' => action(EditPostController::class, $this->resource)
            ]
        ];
    }
}
