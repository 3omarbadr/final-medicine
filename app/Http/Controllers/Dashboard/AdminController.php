<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use App\Services\AdminService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\AdminRequest;

class AdminController extends Controller
{
    public function __construct(protected AdminService $adminService)
    {
    }

    public function index()
    {
        $admins = $this->adminService->getAllAdmins();
        return view('dashboard.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function show($id)
    {
        $admin = $this->adminService->getAdminById($id);
        return view('dashboard.admins.show', compact('admin'));
    }

    public function store(AdminRequest $request)
    {
        $attributes = $request->validated();

        $this->adminService->createAdmin($attributes);
        return redirect()->route('admins.index')->with('success', 'Admin created successfully');
    }

    public function edit($id)
    {
        $admin = $this->adminService->getAdminById($id);
        return view('dashboard.admins.edit', compact('admin'));
    }

    public function update(AdminRequest $request, $id)
    {
        $attributes = $request->validated();
        $this->adminService->updateAdmin($id, $attributes);
        return redirect()->route('admins.index')->with('success', 'Admin updated successfully');
    }

    public function destroy($id)
    {
        $this->adminService->deleteAdmin($id);
        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully');
    }

    public function promote(Admin $admin)
    {
        $this->adminService->promoteAdmin($admin);
        return redirect()->route('admins.index')->with('success', 'Admin promoted to Super Admin successfully');
    }

    public function demote(Admin $superAdmin)
    {
        $this->adminService->demoteSuperAdmin($superAdmin);
        return redirect()->route('admins.index')->with('success', 'Super Admin demoted to Admin successfully');
    }
}
