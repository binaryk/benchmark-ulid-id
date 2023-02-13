<?php

namespace Database\Factories;

use App\Models\AlphaUsers;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlphaUsersFactory extends Factory
{
    protected $model = AlphaUsers::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
