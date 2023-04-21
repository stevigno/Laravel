<?php

namespace Database\Factories;

use App\Models\User;
use Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'title'=>$title = $this->faker->sentence,
            'slug'=>Str::slug($title),
            'content'=>$this->faker->paragraph,
        ];
    }
}
