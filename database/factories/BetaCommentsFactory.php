<?php

namespace Database\Factories;

use App\Models\AlphaComments;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BetaComments;

class BetaCommentsFactory extends Factory
{
    protected $model = BetaComments::class;

    public function definition(): array
    {
        return [
            'comment' => $this->faker->word(),
        ];
    }
}
