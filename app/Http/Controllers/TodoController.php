<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Todo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TodoController extends Controller
{
    // 課題のリストを表示
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject_id' => 'required|exists:subjects,id',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'place' => 'required|string|max:255',
            'group_name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // グループ名からグループを取得
        $group = Group::where('name', $request->input('group_name'))->first();

        // グループが存在しない場合、新しいグループを作成
        if (! $group && $request->has('group_name')) {
            $group = Group::create([
                'id' => Str::uuid(), // UUIDを生成
                'name' => $request->input('group_name'),
                'color' => Group::all()->pluck('color')->random(), // 必要に応じて適切な色を設定
            ]);
        }

        // グループが存在しない場合、空の ID を設定
        $groupId = $group ? $group->id : null;

        $todo = new Todo([
            'subject_id' => $request->input('subject_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'deadline' => $request->input('deadline') . ' ' . $request->input('deadline_time'),
            'submit_place' => $request->input('place'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'last_update_user' => User::all()->pluck('id')->random(),
            'group_id' => $groupId,
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
        $todo->submit_place = $request->input('place');
        $todo->updated_at = Carbon::now();
        $todo->last_update_user = User::all()->pluck('id')->random();
        // $todo->last_update_user = auth()->user()->id;

        $todo->save();

        return redirect()->route('home')->with('success', '課題が更新されました。');
    }

    public function create()
    {
        $subjects = Subject::all();
        $groups = Group::all();

        return view('createTodo.createTodo', compact('subjects', 'groups'));
    }

    // 課題を削除
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('home')->with('success', '課題が削除されました。');
    }
}
