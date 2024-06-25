<?php

namespace Database\Factories;

use App\Models\TodoStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoStatusFactory extends Factory
{
    protected $model = TodoStatus::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'todo_id' => \App\Models\Todo::factory(),
            'status' => $this->faker->boolean,
        ];
    }
}
