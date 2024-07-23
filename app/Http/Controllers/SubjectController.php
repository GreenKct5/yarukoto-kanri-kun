<?php

namespace App\Http\Controllers;

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
            'group_id' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $subject = new Subject([
            'id' => Str::uuid(), // UUIDを生成
            'group_id' => Subject::all()->pluck('group_id')->random(),
            'name' => $request->input('name'),
        ]);

        $subject->save();

        return redirect()->route('home')->with('success', '科目が作成されました。');
    }
}
