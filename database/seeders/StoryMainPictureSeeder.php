<?php

namespace Database\Seeders;

use App\Models\StoryMainPicture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoryMainPictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StoryMainPicture::factory()->count(100)->create();
    }
}
