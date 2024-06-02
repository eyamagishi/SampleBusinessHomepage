<?php

namespace App\Services\NewsService;

use App\Models\News;
use App\Repositories\NewsRepository\NewsRepositoryInterface as NewsRepository;

class NewsService implements NewsServiceInterface
{
    /**
     * @var NewsRepository
     */
    protected $newsRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->newsRepository->getAll();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?News
    {
        return $this->newsRepository->getById($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): News
    {
        return $this->newsRepository->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $attributes): bool
    {
        return $this->newsRepository->update($id, $attributes);
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return $this->newsRepository->delete($id);
    }
}
