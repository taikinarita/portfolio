<?php

namespace Database\Factories;

use App\Models\StorySchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StorySchedule>
 */
class StoryScheduleFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = StorySchedule::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'story_id' => random_int(1,100),
            'order' => random_int(0,100),
            'place_name' => fake()->country(),
            'arrival_date' => fake()->dateTimeBetween($startDate = '-10years', $endDate = 'now')->format('Y年m月d日'),
            'departure_date' => fake()->dateTimeBetween($startDate = '-10years', $endDate = 'now')->format('Y年m月d日'),
        ];
    }
}
