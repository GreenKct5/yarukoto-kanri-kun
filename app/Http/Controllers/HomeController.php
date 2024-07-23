<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

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
        $todos = Todo::all()->groupBy('subject_id');

        return view('home.home', compact('todos'));
    }
}
