<?php

namespace Database\Factories;

use App\Models\BetaRoles;
use Illuminate\Database\Eloquent\Factories\Factory;

class BetaRolesFactory extends Factory
{
    protected $model = BetaRoles::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
