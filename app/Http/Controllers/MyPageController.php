<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\UsersGroup;
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

    public function update(Request $request)
    {
        $user = Auth::user();
        $selectedGroupIds = $request->input('group_ids', []);

        // ユーザーの現在のグループを取得
        $currentGroups = UsersGroup::where('user_id', $user->id)->pluck('group_id')->toArray();

        // 新しく追加するグループID
        $groupsToAdd = array_diff($selectedGroupIds, $currentGroups);
        // 削除するグループID
        $groupsToRemove = array_diff($currentGroups, $selectedGroupIds);

        // グループの追加
        foreach ($groupsToAdd as $groupId) {
            UsersGroup::create([
                'user_id' => $user->id,
                'group_id' => $groupId,
            ]);
        }

        // グループの削除
        UsersGroup::where('user_id', $user->id)
            ->whereIn('group_id', $groupsToRemove)
            ->delete();

        // 更新後の情報を取得
        $usersGroups = UsersGroup::with(['user', 'group'])
            ->where('user_id', $user->id)
            ->get();

        $allGroups = Group::all();

        return view('mypage.mypage', compact('usersGroups', 'user', 'allGroups'))->with('success', 'グループが更新されました。');
    }
}
