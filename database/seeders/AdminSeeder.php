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
            'name' => 'Health Awareness',
            'email' => 'health@admin.com',
            'password' => Hash::make('password'),
            'status' => 'active',
            'super_admin' => 1,
        ]);

        Admin::create([
            'name' => 'Health Awareness',
            'email' => 'health1@admin.com',
            'password' => Hash::make('password'),
            'status' => 'active',
            'super_admin' => 0,
        ]);
    }
}
