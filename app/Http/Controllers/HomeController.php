<?php

namespace App\Http\Controllers;

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
        // すべてのTodosをsubject_idでグループ化し、関連するSubjectを取得
        $todos = Todo::with('subject')->get()->groupBy('subject_id');
        $subjects = Subject::all()->keyBy('id'); // 教科をIDでキー付けして取得

        return view('home.home', compact('todos', 'subjects'));
    }
}
