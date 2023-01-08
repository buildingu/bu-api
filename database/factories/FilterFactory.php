<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\filter>
 */
class FilterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cost' => random_int(1,100),
            'duration_in_months'=>random_int (1,100),
            'season_index'=>random_int(1,4),
            'location_id'=>Location::factory(),
            'type_id'=>Type::factory(),
            'requirement_id'=>Requirement::factory(),
        ];
    }
}
