<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('home.home', compact('todos'));
    }
}
