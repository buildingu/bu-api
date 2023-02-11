<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FundingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type'=>fake(),
            'eligibility'=>fake(),
            'application_deadline'=>"December 31, 2023",
            'highlight'=>fake()->text($maxNbChars = 1000)          
        ];
    }
}
