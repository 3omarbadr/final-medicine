<?php

namespace App\Services;

use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Validator;

class AdminService
{
    public function __construct(protected AdminRepository $adminRepository)
    {
    }

    public function getAllAdmins(): Collection
    {
        return $this->adminRepository->getAllAdmin();
    }

    public function getAdminById($id): ?Admin
    {
        return $this->adminRepository->getAdminById($id);
    }

    public function createAdmin($data): Admin
    {
        return $this->adminRepository->createAdmin($data);
    }

    public function updateAdmin($id, array $data): ?Admin
    {
        $admin = $this->adminRepository->getAdminById($id);
        if (!$admin) {
            return null;
        }
        $this->adminRepository->updateAdmin($admin, $data);
        return $admin;
    }

    public function deleteAdmin($id): ?Admin
    {
        $admin = $this->adminRepository->getAdminById($id);
        if (!$admin) {
            return null;
        }
        $this->adminRepository->deleteAdmin($admin);
        return $admin;
    }

    public function promoteAdmin(Admin $admin): ?Admin
    {
        $this->adminRepository->promoteAdmin($admin);
        return $admin;
    }

    public function demoteSuperAdmin(Admin $superAdmin): ?Admin
    {
        $this->adminRepository->demoteSuperAdmin($superAdmin);

        return $superAdmin;
    }
}
