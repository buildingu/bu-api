<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\resource>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->jobTitle(),
            'content'=>fake()->paragraph($nbSentences = 4, $variableNbSentences = true),
            'active'=>0,
            'created_at'=>fake()->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = 'UTC'),
            'updated_at'=>fake()->dateTimeBetween($startDate = '-20 years', $endDate = 'now', $timezone = 'UTC'),
            'views_last_month'=>random_int(1,4000),
            'filter_id'=>Filter::factory(),
        ];
    }
}
