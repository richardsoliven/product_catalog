<?php

namespace Module\Core\Repositories;

use Module\Core\Models\User;

class UserRepository
{
    /**
     * Count the slug if exist.
     *
     * @param string $slug | Slug of the user
     *
     * @return int
     */
    public function countSlugExist(string $slug): int
    {
        return User::where('slug', 'like', $slug . '%')->count();
    }
}