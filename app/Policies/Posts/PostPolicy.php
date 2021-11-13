<?php

namespace App\Policies\Posts;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    public const ADMINISTER = 'administer';

    use HandlesAuthorization;

    public function administer(User $user, Post $post)
    {
        return $user->isAdminOrOwner($post);
    }
}
