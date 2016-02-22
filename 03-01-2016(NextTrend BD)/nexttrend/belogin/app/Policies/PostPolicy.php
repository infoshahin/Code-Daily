<?php

namespace App\Policies;

use App\User;
use App\Http\Models\Product;

class PostPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return bool
     */
    public function update(User $user, Product $post)
    {
        return true;
    }
}