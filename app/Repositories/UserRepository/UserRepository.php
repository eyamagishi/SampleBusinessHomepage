<?php

namespace App\Repositories\UserRepository;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    protected $model;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
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
    public function getById(int $id): ?User
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
    public function create(array $data): User
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
            $user = $this->getById($id);

            if (!$user) {
                return false;
            }

            return $user->update($attributes);
        });
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return DB::transaction(function () use ($id) {
            $user = $this->getById($id);

            if (!$user) {
                return false;
            }

            return $user->delete();
        });
    }
}
