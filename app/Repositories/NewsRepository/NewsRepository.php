<?php

namespace App\Repositories\NewsRepository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

use App\Models\News;

class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @var News
     */
    protected $model;

    /**
     * @param News $news
     */
    public function __construct(News $news)
    {
        $this->model = $news;
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
    public function getById(int $id): ?News
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
    public function create(array $data): News
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
            $news = $this->getById($id);

            if (!$news) {
                return false;
            }

            return $news->update($attributes);
        });
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return DB::transaction(function () use ($id) {
            $news = $this->getById($id);

            if (!$news) {
                return false;
            }

            return $news->delete();
        });
    }
}
