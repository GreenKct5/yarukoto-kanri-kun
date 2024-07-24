<?php

namespace App\Http\Controllers;

use App\Models\Group;

class GroupController extends Controller
{
    public function getSubjects($groupId)
    {
        $group = Group::findOrFail($groupId);
        $subjects = $group->subjects;

        return response()->json($subjects);
    }
}
