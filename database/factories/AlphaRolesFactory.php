<?php

namespace Database\Factories;

use App\Models\AlphaRoles;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlphaRolesFactory extends Factory
{
    protected $model = AlphaRoles::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
