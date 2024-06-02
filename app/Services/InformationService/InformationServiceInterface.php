<?php

namespace App\Services\InformationService;

use App\Models\Information;

interface InformationServiceInterface
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
     * @return Information|null
     */
    public function getById(int $id): ?Information;

    /**
     * Create a new information record.
     *
     * @param array $data
     * @return Information
     * @throws \Exception
     */
    public function create(array $data): Information;

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
