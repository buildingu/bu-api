<?php

namespace Database\Factories;

use App\Models\Crew;
use App\Models\Institution;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Crew::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'position'=>$this->faker->word(),
            'education_level'=>$this->faker->randomDigit(),
        ];
    }
}
