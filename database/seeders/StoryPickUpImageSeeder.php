<?php

namespace Database\Seeders;

use App\Models\StoryPickUpImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoryPickUpImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StoryPickUpImage::factory()->count(100)->create();
    }
}
