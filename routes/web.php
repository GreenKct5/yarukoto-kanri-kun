<?php

use App\Http\Controllers\UserController;
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
})->name('welcome');

Route::view('/home', 'home.home');
Route::view('/createTodo', 'createTodo.createTodo');
Route::view('/myPage', 'myPage.myPage');
Route::View('/signUp', 'signUp.signUp');
Route::view('/signIn', 'signIn.signIn');
Route::view('/loading', 'loading');

Route::resource('users', UserController::class)->only(['store', 'show', 'update', 'destroy']);
