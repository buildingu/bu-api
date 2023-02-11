<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResourcesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake(),
            'content'=>text($maxNbChars = 1500),
            'status'=>random_int(0,1),
            'views_last_month'=>random_in(0,5000),
            'institution_id'=>Institution::factory(),

        ];
    }
}
