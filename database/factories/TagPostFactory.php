<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\Post;
use App\Models\TagPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TagPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag_id'=>Tag::inRandomOrder()->first()->id,
            'post_id'=>Post::inRandomOrder()->first()->id
        ];
    }
}
