<?php
namespace Database\Factories;
use App\Models\TodoStatus;
use App\Models\User;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoStatusFactory extends Factory
{
    protected $model = TodoStatus::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'user_id' => User::All()->pluck('id')->random(),
            'todo_id' => Todo::All()->pluck('id')->random(),
            'iscompleted' => $this->faker->boolean,
        ];
    }
}
