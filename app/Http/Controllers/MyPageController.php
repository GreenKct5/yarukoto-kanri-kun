<?php

namespace App\Http\Controllers;

use App\Models\UsersGroup;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $usersGroups = UsersGroup::with(['user', 'group'])
            ->where('user_id', $user->id)
            ->get();

        $allGroups = Group::all();

        return view('mypage.mypage', compact('usersGroups', 'user', 'allGroups'));
    }
}
