<?php

namespace Database\Factories;

use App\Models\User;
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
            
        'title' => fake()->sentence(5),
        'subtitle' => fake()->sentence(20),
        'body' => fake()->sentence(50),
        'image' => 'storage/immagini/nondisponibile2.jpg',
        'category_id' => random_int(1, 6),
        'user_id' => random_int(1, User::count()),
        'created_at' => now(),
        ];
    }
}


