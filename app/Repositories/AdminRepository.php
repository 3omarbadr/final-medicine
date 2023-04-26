<?php

namespace App\Repositories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Collection;

class AdminRepository
{
    public function getAllAdmin(): Collection
    {
        return Admin::all();
    }

    public function getAdminById($id): ?Admin
    {
        return Admin::findOrFail($id);
    }

    public function createAdmin(array $data): Admin
    {
        return Admin::create($data);
    }

    public function updateAdmin(Admin $Admin, array $data): void
    {
        $Admin->update($data);
    }

    public function deleteAdmin(Admin $Admin): void
    {
        $Admin->delete();
    }

    public function promoteAdmin(Admin $admin): void
    {
        $admin->update([
            'super_admin' => 1,
        ]);
    }

    public function demoteSuperAdmin(Admin $superAdmin): void
    {
        $superAdmin->update([
            'super_admin' => 0,
        ]);
    }
}
