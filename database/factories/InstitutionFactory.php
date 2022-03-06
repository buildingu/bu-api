<?php

namespace Database\Factories;

use App\Models\Institution;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstitutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Institution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'country_id'=>Country::inRandomOrder()->first()->id,
        ];
    }
}
