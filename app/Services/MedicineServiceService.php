<?php

namespace App\Services;

use App\Models\MedicineService;
use App\Repositories\MedicineServiceRepository;
use Illuminate\Database\Eloquent\Collection;

class MedicineServiceService
{
    public function __construct(protected MedicineServiceRepository $medicineServiceRepository)
    {
    }

    public function getAllMedicineServices(): Collection
    {
        return $this->medicineServiceRepository->getAllMedicineServices();
    }

    public function getMedicineServiceById($id): ?MedicineService
    {
        return $this->medicineServiceRepository->getMedicineServiceById($id);
    }

    public function createMedicineService($data): MedicineService
    {
        return $this->medicineServiceRepository->createMedicineService($data);
    }

    public function updateMedicineService($id, array $data): ?MedicineService
    {
        $medicineService = $this->medicineServiceRepository->getMedicineServiceById($id);
        if (!$medicineService) {
            return null;
        }
        $this->medicineServiceRepository->updateMedicineService($medicineService, $data);
        return $medicineService;
    }

    public function deleteMedicineService($id): ?MedicineService
    {
        $medicineService = $this->medicineServiceRepository->getMedicineServiceById($id);
        if (!$medicineService) {
            return null;
        }
        $this->medicineServiceRepository->deleteMedicineService($medicineService);
        return $medicineService;
    }
}
