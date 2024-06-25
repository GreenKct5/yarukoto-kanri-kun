<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition()
    {
        return [
            'group_id' => \App\Models\Group::factory(),
            'subject' => $this->faker->numberBetween(100, 199),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'deadline' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'created_at' => now(),
            'updated_at' => now(),
            'last_update_user' => \App\Models\User::factory(),
        ];
    }
}
