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
        User::factory()->count(50)->create();
        Group::factory()->count(10)->create();
        UsersGroup::factory()->count(100)->create();
        Subject::factory()->count(10)->create();
        Todo::factory()->count(20)->create();
        TodoStatus::factory()->count(50)->create();
    }
}

