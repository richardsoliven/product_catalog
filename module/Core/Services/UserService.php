<?php

namespace Module\Core\Services;

use Illuminate\Support\Str;
use Module\Core\Models\User;
use Module\Core\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserObserver constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Generate slug
     *
     * @param User $user
     *
     * @throws \Exception
     *
     * @return string
     */
    public function generateSlug(User $user): string
    {
        try {
            $slug = Str::slug(
                sprintf('%s %s %s',
                    $user->getFirstName(),
                    $user->getMiddleName(),
                    $user->getLastName()
                ),
                '-'
            );
            $existingCount = $this->userRepository->countSlugExist($slug);

            if($existingCount != 0) {
                $slug = sprintf('%s-%d',
                    $slug,
                    $existingCount++
                );
            }

            return $slug;
        } catch (\Exception $e) {
            throw new \Exception('There is an error in generate slug service');
        }
    }
}