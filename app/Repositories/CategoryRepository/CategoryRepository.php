<?php

namespace App\Repositories\CategoryRepository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var Category
     */
    protected $model;

    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model->all();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?Category
    {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return null;
        }
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): Category
    {
        return DB::transaction(function () use ($data) {
            return $this->model->create($data);
        });
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $attributes): bool
    {
        return DB::transaction(function () use ($id, $attributes) {
            $category = $this->getById($id);

            if (!$category) {
                return false;
            }

            return $category->update($attributes);
        });
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return DB::transaction(function () use ($id) {
            $category = $this->getById($id);

            if (!$category) {
                return false;
            }

            return $category->delete();
        });
    }
}
