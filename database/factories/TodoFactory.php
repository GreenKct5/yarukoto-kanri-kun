<?php
namespace Database\Factories;

use App\Models\Todo;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'subject_id' => Subject::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'deadline' => $this->faker->dateTimeBetween('now', '+1 year'),
            'created_at' => now(),
            'updated_at' => now(),
            'last_update_user' => User::factory(),
        ];
    }
}
