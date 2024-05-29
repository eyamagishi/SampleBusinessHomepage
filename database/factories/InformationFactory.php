<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIds = Category::pluck('id')->toArray();
        $categoryId = $this->faker->randomElement($categoryIds);

        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'img'         => 'images/sample1.jpg',
            'url'         => '#',
            'category_id' => $categoryId,
        ];
    }
}
