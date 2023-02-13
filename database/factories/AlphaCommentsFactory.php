<?php

namespace Database\Factories;

use App\Models\AlphaComments;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlphaCommentsFactory extends Factory
{
    protected $model = AlphaComments::class;

    public function definition(): array
    {
        return [
            'comment' => $this->faker->word(),
        ];
    }
}
