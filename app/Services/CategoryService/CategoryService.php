<?php

namespace App\Services\CategoryService;

use \Illuminate\Database\Eloquent\Collection;

use App\Models\Category;
use App\Repositories\CategoryRepository\CategoryRepositoryInterface as CategoryRepository;

class CategoryService implements CategoryServiceInterface
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->categoryRepository->getAll();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?Category
    {
        return $this->categoryRepository->getById($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): Category
    {
        return $this->categoryRepository->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $attributes): bool
    {
        return $this->categoryRepository->update($id, $attributes);
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return $this->categoryRepository->delete($id);
    }

    public function getAllWithIdKeys(): \Illuminate\Database\Eloquent\Collection
    {
        $responses = $this->categoryRepository->getAll();
        $categories = new Collection();
        // keyをidに変更
        foreach ($responses as $response) {
            $categories->put($response->id, $response);
        }
        return $categories;
    }
}
