<?php

namespace App\Repositories;

use App\Models\MedicineService;
use Illuminate\Database\Eloquent\Collection;

class MedicineServiceRepository
{
    public function getAllMedicineServices(): Collection
    {
        return MedicineService::all();
    }

    public function getMedicineServiceById($id): ?MedicineService
    {
        return MedicineService::findOrFail($id);
    }

    public function createMedicineService(array $data): MedicineService
    {
        return MedicineService::create($data);
    }

    public function updateMedicineService(MedicineService $medicineService, array $data): void
    {
        $medicineService->update($data);
    }

    public function deleteMedicineService(MedicineService $medicineService): void
    {
        $medicineService->delete();
    }
}
