<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'        => $this->faker->sentence,
            'content'      => $this->faker->paragraphs(3, true),
            'category_id'  => Category::inRandomOrder()->first()->id,
            'published_at' => now()->format('Y/m/d'),
        ];
    }
}
