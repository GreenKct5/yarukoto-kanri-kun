<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Todo;
use App\Models\TodoStatus;
use App\Models\User;
use App\Models\UsersGroup;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(0)->create();
        Group::factory()->count(0)->create();
        UsersGroup::factory()->count(0)->create();
        Subject::factory()->count(0)->create();
        Todo::factory()->count(0)->create();
        TodoStatus::factory()->count(0)->create();
    }
}
