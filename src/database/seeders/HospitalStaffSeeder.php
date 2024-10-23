<?php

namespace Database\Seeders;

use App\Models\HospitalModel;
use App\Models\HospitalStaffModel;
use Illuminate\Database\Seeder;

class HospitalStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hospitals = HospitalModel::all();
        foreach ($hospitals as $hospital) {
            HospitalStaffModel::factory()->count(10)->create(['hospital_id' => $hospital->id]);
        }
    }
}
