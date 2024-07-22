<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class HomeController extends Controller
{
    public function index()
    {
        $todos = Todo::all()->groupBy('subject_id');

        return view('home.home', compact('todos'));
    }
}
