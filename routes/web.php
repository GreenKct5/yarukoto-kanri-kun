<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home.home');
Route::view('/createTodo', 'createTodo.createTodo');
Route::view('/logOut', 'logOut.logOut');
Route::view('/myPage', 'myPage.myPage');
Route::view('/signUp', 'signUp.signUp');
Route::view('/signIn', 'signIn.signIn');
Route::view('/loading', 'loading');