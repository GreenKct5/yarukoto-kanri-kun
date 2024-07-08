<?php
namespace Database\Factories;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

class GroupFactory extends Factory
{
    protected $model = Group::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'name' => $this->faker->word,
            'color' => ltrim($this->faker->hexColor, '#'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
