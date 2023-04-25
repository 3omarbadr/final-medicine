<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Omar Badr',
            'email' => 'omarbadr167@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 'active',
            'super_admin' => 1,
        ]);
    }
}
