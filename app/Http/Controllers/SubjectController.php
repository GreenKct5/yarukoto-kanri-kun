<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    // 課題を保存
    public function store(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',
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
        if (! $group) {
            $group = Group::create([
                'id' => Str::uuid(), // UUIDを生成
                'name' => $request->input('group_name'),
                'color' => 'FF5733',
            ]);
        }

        $subject = new Subject([
            'id' => Str::uuid(), // UUIDを生成
            'group_id' => $group->id,
            'name' => $request->input('name'),
        ]);

        $subject->save();

        return redirect()->route('home')->with('success', '科目が作成されました。');
    }
}
