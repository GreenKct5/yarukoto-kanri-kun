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
        'subject_id' => 'required|exists:subjects,id',
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
        'subject_id' => $request->input('subject_id'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'deadline' => $request->input('deadline') . ' ' . $request->input('deadline_time'),
        'submit_place' => $request->place,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        'last_update_user' => User::all()->pluck('id')->random(),
        // 'last_update_user' => auth()->user()->id,
    ]);

    $todo->save();

    return redirect()->route('home')->with('success', '課題が作成されました。');
}
    // 更新
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'subject_id' => 'required|exists:subjects,id', // Ensure subject exists
            'title' => 'required|string|max:255',
            'submit_place' => 'required|string|max:255',
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
        $todo->subject_place = $request->place;
        $todo->updated_at = Carbon::now();
        $todo->last_update_user = User::all()->pluck('id')->random();
        // $todo->last_update_user = auth()->user()->id;

        $todo->save();

        return redirect()->route('home')->with('success', '課題が更新されました。');
    }

    public function create()
    {
        $subjects = Subject::all();

        return view('createTodo.createTodo', compact('subjects'));
    }

    // 課題を削除
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('home')->with('success', '課題が削除されました。');
    }
}
