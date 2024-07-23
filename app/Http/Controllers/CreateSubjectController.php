<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateSubjectController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
        ]);


        return redirect()->route('todo.create')->with('success', 'Subjectが作成されました');
    }
}
