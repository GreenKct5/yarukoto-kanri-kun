<?php
namespace Database\Factories;

use App\Models\UsersGroup;
use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

use Faker\Generator as Faker;

class UsersGroupFactory extends Factory
{
    protected $model = UsersGroup::class;
// UsersGroupFactory.php

public function definition()
{ 
    $userID  = User::all()->pluck("id");
    $groupID  = Group::all()->pluck("id");

    /* 中間テーブルを作成する*/
    return [
        'user_id' => $this -> faker -> randomElement($userID), // $userID  ランダムでIDを選択
        'group_id' => $this -> faker ->randomElement($groupID) // $groupID ランダムでIDを選択
    ];
}
}