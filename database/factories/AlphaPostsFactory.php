<?php

namespace Database\Factories;

use App\Models\AlphaPosts;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlphaPostsFactory extends Factory
{
    protected $model = AlphaPosts::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
        ];
    }
}
