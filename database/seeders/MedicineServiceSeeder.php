<?php

namespace Database\Seeders;

use App\Models\MedicineService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicineService::factory()
        ->count(5)
        ->create();
    }
}
