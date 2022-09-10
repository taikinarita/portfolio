<?php

namespace Database\Seeders;

use App\Models\StoryPickUpMemory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoryPickUpMemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StoryPickUpMemory::factory()->count(100)->create();
    }
}
