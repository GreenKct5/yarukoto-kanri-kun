<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->route('loading.home');
    }

    public function loading()
    {
        return view('loading');
    }

    public function home()
    {
        $todos = Todo::with('group', 'subject')->get();
        $subjects = Subject::all()->keyBy('id'); // SubjectをIDでキー付けして取得
        $groups = Group::with('subjects')->get()->keyBy('id'); // グループと関連するsubjectsを取得

        return view('home.home', compact('todos', 'subjects', 'groups'));
    }
}
