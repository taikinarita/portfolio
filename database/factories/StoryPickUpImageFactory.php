<?php

namespace Database\Factories;

use App\Models\StoryPickUpImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoryPickUpImage>
 */
class StoryPickUpImageFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = StoryPickUpImage::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'story_pick_up_memory_id' => random_int(1,100),
            'story_pick_up_image' => fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
