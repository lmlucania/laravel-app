<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\HospitalModel;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HospitalModel::factory()->count(20)->create();
    }
}
