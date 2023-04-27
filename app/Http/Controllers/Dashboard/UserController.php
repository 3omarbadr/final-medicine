<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Dashboard\UserRequest;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function index()
    {
        $Users = $this->userService->getAllUsers();
        return view('dashboard.users.index', compact('Users'));
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function show($id)
    {
        $User = $this->userService->getUserById($id);
        return view('dashboard.users.show', compact('User'));
    }

    public function store(UserRequest $request)
    {
        $attributes = $request->validated();

        $this->userService->createUser($attributes);
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $User = $this->userService->getUserById($id);
        return view('dashboard.users.edit', compact('User'));
    }

    public function update(UserRequest $request, $id)
    {
        $attributes = $request->validated();
        $this->userService->updateUser($id, $attributes);
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $this->userService->deleteUser($id);
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
