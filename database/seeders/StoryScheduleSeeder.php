<?php

namespace Database\Seeders;

use App\Models\StorySchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoryScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StorySchedule::factory()->count(1000)->create();
    }
}
