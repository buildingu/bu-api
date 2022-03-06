<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CrewInstitution;

class CrewInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CrewInstitution::factory()->count(3)->create();
    }
}

