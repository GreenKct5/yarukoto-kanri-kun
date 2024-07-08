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
        return [
            'id' => $this->faker->uuid,
            'group_id' => Group::factory(),
            'name' => $this->faker->word,
        ];
    }
}
