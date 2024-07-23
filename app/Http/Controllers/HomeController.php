<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Todo;

class HomeController extends Controller
{
    // 課題のリストを表示
    public function index()
    {
        $todos = Todo::with('group', 'subject')->get();
        $subjects = Subject::all()->keyBy('id'); // SubjectをIDでキー付けして取得
        $groups = Group::with('subjects')->get()->keyBy('id'); // グループと関連するsubjectsを取得

        return view('home.home', compact('todos', 'subjects', 'groups'));
    }
}
