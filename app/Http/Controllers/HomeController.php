<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Todo;
use App\Models\UsersGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $userGroupIds = UsersGroup::where('user_id', $user->id)->pluck('group_id')->toArray();
        $subjectIds = Subject::whereIn('group_id', $userGroupIds)->pluck('id')->toArray();

        // Fetch todos associated with the user's subjects
        $todos = Todo::with(['subject', 'subject.group'])
            ->whereIn('subject_id', $subjectIds)
            ->get();

        $subjects = Subject::all()->keyBy('id'); // SubjectをIDでキー付けして取得
        $groups = Group::with('subjects')->get()->keyBy('id'); // グループと関連するsubjectsを取得

        return view('home.home', compact('todos', 'subjects', 'groups'));
    }
}
