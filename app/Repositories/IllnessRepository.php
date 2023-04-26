<?php

namespace App\Repositories;

use App\Models\Illness;
use Illuminate\Database\Eloquent\Collection;

class IllnessRepository
{
    public function getAllIllnesses(): Collection
    {
        return Illness::all();
    }

    public function getIllnessById($id): ?Illness
    {
        return Illness::findOrFail($id);
    }

    public function createIllness(array $data): Illness
    {
        return Illness::create($data);
    }

    public function updateIllness(Illness $illness, array $data): void
    {
        $illness->update($data);
    }

    public function deleteIllness(Illness $illness): void
    {
        $illness->delete();
    }
}
