<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    public function getAllUser(): Collection
    {
        return User::all();
    }

    public function getUserById($id): ?User
    {
        return User::findOrFail($id);
    }

    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function updateUser(User $User, array $data): void
    {
        $User->update($data);
    }

    public function deleteUser(User $User): void
    {
        $User->delete();
    }
}
