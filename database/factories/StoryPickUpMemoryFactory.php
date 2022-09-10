<?php

namespace Database\Factories;

use App\Models\StoryPickUpMemory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoryPickUpMemory>
 */
class StoryPickUpMemoryFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = StoryPickUpMemory::class;

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
            'story_pick_up_memory_title' => fake()->title(),
            'story_pick_up_memory_image' => fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
