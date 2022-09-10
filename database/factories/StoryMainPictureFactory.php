<?php

namespace Database\Factories;

use App\Models\StoryMainPicture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StoryMainPicture>
 */
class StoryMainPictureFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = StoryMainPicture::class;

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
            'main_impression_image' => fake()->imageUrl(640, 480, 'animals', true),
        ];
    }
}
