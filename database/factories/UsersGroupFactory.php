<?php
namespace Database\Factories;

use App\Models\UsersGroup;
use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Generator as Faker;

class UsersGroupFactory extends Factory
{
    protected $model = UsersGroup::class;
// UsersGroupFactory.php

public function definition()
{ 
    $userID  = User::all()->random(1)[0]->id;
    $groupID  = Group::all()->random(1)[0]->id;
    logger('test', ['foo' => 'userID']);


    /* 中間テーブルを作成する*/
    return [
        'user_id' => "12345", // ランダムでIDを選択
        'group_id' => $groupID    // ランダムでIDを選択
    ];

}
}