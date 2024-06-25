<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTodoController extends Controller
{
    public function create()
    {
        return view('create-todo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'submission_place' => 'required|string|max:255',
            'tags' => 'required|string|max:255',
            'notes' => 'required|string|max:1000',
        ]);

        // バリデーションが成功した場合の処理（例：データベースに保存）

        return redirect()->route('todo.create')->with('success', 'Todoが作成されました');
    }
}
