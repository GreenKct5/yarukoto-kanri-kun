<?php
namespace Database\Factories;

use App\Models\Subject;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    protected $model = Subject::class;

    public function definition()
    {
        $group_id = Group::all()->pluck("id");
        return [
            'id' => $this->faker->uuid,
            'group_id' => $this -> faker -> randomElement($group_id),
            'name' => $this->faker->word,
        ];
    }
}
