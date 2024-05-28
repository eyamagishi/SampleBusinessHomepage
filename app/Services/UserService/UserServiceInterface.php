<?php

namespace App\Services\UserService;

use App\Models\User;

interface UserServiceInterface
{
    /**
     * Retrieve all information records.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection;

    /**
     * Get an existing information record by its ID.
     *
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User;

    /**
     * Create a new information record.
     *
     * @param array $data
     * @return User
     * @throws \Exception
     */
    public function create(array $data): User;

    /**
     * Update an existing information record by its ID.
     *
     * @param int $id
     * @param array $attributes
     * @return bool
     * @throws \Exception
     */
    public function update(int $id, array $attributes): bool;

    /**
     * Delete an existing information record by its ID.
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool;
}
