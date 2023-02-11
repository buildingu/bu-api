<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OpportunitiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'program_length'=>random_int(1,20),
            'admissions_requirements'=>fake()->text($maxNbChars = 200),
            'highlight'=>fake()->text($maxNbChars = 1000),
            'financial'=>fake()->text($maxNbChars = 100)    
        ];
    }
}
