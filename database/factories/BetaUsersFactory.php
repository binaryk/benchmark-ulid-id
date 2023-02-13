<?php

namespace Database\Factories;

use App\Models\AlphaUsers;
use App\Models\BetaUsers;
use Illuminate\Database\Eloquent\Factories\Factory;

class BetaUsersFactory extends Factory
{
    protected $model = BetaUsers::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
