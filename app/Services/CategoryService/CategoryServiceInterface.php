<?php

namespace App\Services\CategoryService;

use App\Models\Category;

interface CategoryServiceInterface
{
    /**
     * Retrieve all category records.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection;

    /**
     * Get an existing category record by its ID.
     *
     * @param int $id
     * @return Category|null
     */
    public function getById(int $id): ?Category;

    /**
     * Create a new category record.
     *
     * @param array $data
     * @return Category
     * @throws \Exception
     */
    public function create(array $data): Category;

    /**
     * Update an existing category record by its ID.
     *
     * @param int $id
     * @param array $attributes
     * @return bool
     * @throws \Exception
     */
    public function update(int $id, array $attributes): bool;

    /**
     * Delete an existing category record by its ID.
     *
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function delete(int $id): bool;

    /**
     * Retrieve all category records indexed from one.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllWithIdKeys(): \Illuminate\Database\Eloquent\Collection;
}
