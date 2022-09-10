<?php

namespace Database\Factories;

use App\Models\AppUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppUser>
 */
class AppUserFactory extends Factory
{
    /**
     * モデルと対応するファクトリの名前
     *
     * @var string
     */
    protected $model = AppUser::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_name' => fake()->name(),
            'email' => fake()->email(),
            'password' => fake()->password(),
            'age' => random_int(0, 150),
            'sex' => random_int(0,1),
            'best_place' => fake()->country(),
            'wish_place' => fake()->country(),
            'introduction' => fake()->realText(),
        ];
    }
}
