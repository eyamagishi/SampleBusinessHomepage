<?php

namespace App\Repositories\UserRepository;

use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * Retrieve all user records.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection;

    /**
     * Get an existing user record by its ID.
     *
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User;

    /**
     * Create a new user record.
     *
     * @param array $data
     * @return User
     * @throws \Exception
     */
    public function create(array $data): User;

    /**
     * Update an existing user record by its ID.
     *
     * @param int $id
     * @param array $attributes
     * @return bool
     * @throws \Exception
     */
    public function update(int $id, array $attributes): bool;

    /**
     * Delete an existing user record by its ID.
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool;
}
