<?php

namespace App\Services\InformationService;

use App\Models\Information;
use App\Repositories\InformationRepository\InformationRepositoryInterface as InformationRepository;

class InformationService implements InformationServiceInterface
{
    /**
     * @var InformationRepository
     */
    protected $informationRepository;

    /**
     * @param InformationRepository $informationRepository
     */
    public function __construct(InformationRepository $informationRepository)
    {
        $this->informationRepository = $informationRepository;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->informationRepository->getAll();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?Information
    {
        return $this->informationRepository->getById($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $data): Information
    {
        return $this->informationRepository->create($data);
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, array $attributes): bool
    {
        return $this->informationRepository->update($id, $attributes);
    }

    /**
     * @inheritDoc
     */
    public function delete(int $id): bool
    {
        return $this->informationRepository->delete($id);
    }
}
