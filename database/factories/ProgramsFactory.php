<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProgramsFactory extends Factory
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
            'location'=>address(),
            'highlight'=>fake()->text($maxNbChars = 1000),
            'cost'=>randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
        ];
    }
}
