<?php

namespace Database\Factories;

use App\Models\AlphaPosts;
use App\Models\BetaPosts;
use Illuminate\Database\Eloquent\Factories\Factory;

class BetaPostsFactory extends Factory
{
    protected $model = BetaPosts::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
        ];
    }
}
