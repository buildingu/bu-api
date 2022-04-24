<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TagPost;

class TagPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TagPost::factory()->count(3)->create();
    }
}
