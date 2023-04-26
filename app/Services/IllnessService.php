<?php

namespace App\Services;

use App\Models\Illness;
use App\Repositories\IllnessRepository;
use Illuminate\Database\Eloquent\Collection;

class IllnessService
{
    public function __construct(protected IllnessRepository $illnessRepository)
    {
    }

    public function getAllIllnesses(): Collection
    {
        return $this->illnessRepository->getAllIllnesses();
    }

    public function getIllnessById($id): ?Illness
    {
        return $this->illnessRepository->getIllnessById($id);
    }

    public function createIllness($data): Illness
    {
        return $this->illnessRepository->createIllness($data);
    }

    public function updateIllness($id, array $data): ?Illness
    {
        $illness = $this->illnessRepository->getIllnessById($id);
        if (!$illness) {
            return null;
        }
        $this->illnessRepository->updateIllness($illness, $data);
        return $illness;
    }

    public function deleteIllness($id): ?Illness
    {
        $illness = $this->illnessRepository->getIllnessById($id);
        if (!$illness) {
            return null;
        }
        $this->illnessRepository->deleteIllness($illness);
        return $illness;
    }
}
