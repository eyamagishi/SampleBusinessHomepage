<?php

namespace App\Repositories\NewsRepository;

use App\Models\News;

interface NewsRepositoryInterface
{
    /**
     * Retrieve all news records.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection;

    /**
     * Get an existing news record by its ID.
     *
     * @param int $id
     * @return News|null
     */
    public function getById(int $id): ?News;

    /**
     * Create a new news record.
     *
     * @param array $data
     * @return News
     * @throws \Exception
     */
    public function create(array $data): News;

    /**
     * Update an existing news record by its ID.
     *
     * @param int $id
     * @param array $attributes
     * @return bool
     * @throws \Exception
     */
    public function update(int $id, array $attributes): bool;

    /**
     * Delete an existing news record by its ID.
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool;
}
