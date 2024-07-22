<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Todo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    // 課題のリストを表示
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    // 課題を保存
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'place' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $todo = new Todo([
            // 'subject_id' => $request->input('subject_id'),
            'subject_id' => Subject::all()->pluck('id')->random(),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'deadline' => $request->input('deadline') . ' ' . $request->input('deadline_time'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'last_update_user' => User::all()->pluck('id')->random(),
            // 'last_update_user' => auth()->user()->id,
        ]);

        $todo->save();

        return redirect()->route('home')->with('success', '課題が作成されました。');
    }

    // 課題の詳細を表示
    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.show', compact('todo'));
    }

    // 課題の編集フォームを表示
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.edit', compact('todo'));
    }

    // 課題を更新
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'subject_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'place' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $todo = Todo::findOrFail($id);
        $todo->subject_id = $request->input('subject_id');
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->deadline = $request->input('deadline') . ' ' . $request->input('deadline_time');
        $todo->updated_at = Carbon::now();
        $todo->last_update_user = User::all()->pluck('id')->random();
        // $todo->last_update_user = auth()->user()->id;

        $todo->save();

        return redirect()->route('home')->with('success', '課題が更新されました。');
    }

    // 課題を削除
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('home')->with('success', '課題が削除されました。');
    }
}
