<?php

namespace Database\Factories;

use App\Models\Crew;
use App\Models\Institution;
use App\Models\CrewInstitution;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrewInstitutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CrewInstitution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'institution_id'=>Institution::inRandomOrder()->first()->id,
            'crew_id'=>Crew::inRandomOrder()->first()->id
        ];
    }
}
