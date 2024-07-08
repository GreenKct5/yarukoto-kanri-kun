<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;
use App\Models\UsersGroup;
use App\Models\Subject;
use App\Models\Todo;
use App\Models\TodoStatus;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::factory()->create();
        $group = Group::factory()->create();
        
        UsersGroup::factory()->create([
            'user_id' => $user->id,
            'group_id' => $group->id,
        ]);

        $user->groups()->attach($group->id, ['id' => (string) \Illuminate\Support\Str::uuid()]);

        Subject::factory()->create(['group_id' => $group->id]);
        $todo = Todo::factory()->create(['last_update_user' => $user->id]);
        TodoStatus::factory()->create([
            'user_id' => $user->id,
            'todo_id' => $todo->id,
        ]);
    }
}

