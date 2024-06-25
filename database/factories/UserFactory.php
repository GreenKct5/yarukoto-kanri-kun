<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'icon' => $this->faker->imageUrl(100, 100),
            'groups' => json_encode(['groups' => [1, 2]]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
