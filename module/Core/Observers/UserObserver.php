<?php

namespace Module\Core\Observers;

use Module\Core\Models\User;
use Module\Core\Services\UserService;

class UserObserver
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * UserObserver constructor.
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Handle the user "created" event.
     *
     * @param  \Module\Core\Models\User $user
     *
     * @throws \Exception
     *
     * @return void
     */
    public function creating(User $user)
    {
        $user->setSlug($this->userService->generateSlug($user));
    }
}
