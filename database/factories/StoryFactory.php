<?php

namespace Database\Factories;

use App\Models\Story;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = Story::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => random_int(1,50),
            'title' => fake()->title(),
            'type' => random_int(0,2),
            'date_first' => fake()->dateTimeBetween($startDate = '-10years', $endDate = 'now')->format('Y年m月d日'),
            'date_last' => fake()->dateTimeBetween($startDate = '-10years', $endDate = 'now')->format('Y年m月d日'),
            'number_of_people' => random_int(0,10),
            'main_image' => fake()->imageUrl(640, 480, 'animals', true),
            'main_impression' => fake()->realText(),
            'remarks' => fake()->realText(),
        ];
    }
}
