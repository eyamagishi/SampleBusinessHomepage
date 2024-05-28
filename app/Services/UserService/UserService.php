<?php

namespace App\Services\UserService;

use App\Models\User;
use App\Repositories\UserRepository\UserRepositoryInterface as UserRepository;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->userRepository->getAll();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?User
    {
        return $this->userRepository->getById($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): User
    {
        return $this->userRepository->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $attributes): bool
    {
        return $this->userRepository->update($id, $attributes);
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return $this->userRepository->delete($id);
    }
}
