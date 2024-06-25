<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->count(10)->create();
        \App\Models\Group::factory()->count(5)->create();
        \App\Models\Todo::factory()->count(20)->create();
        \App\Models\TodoStatus::factory()->count(20)->create();
    }
}
