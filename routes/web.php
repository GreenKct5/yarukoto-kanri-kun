<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateTodoController;
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
Route::get('/createTodo', function () {
    return view('createTodo.createTodo');
});
Route::post('/createTodo', [CreateTodoController::class, 'store'])->name('todos.store');
Route::view('/myPage', 'myPage.myPage');
Route::View('/signUp', 'signUp.signUp');
Route::view('/signIn', 'signIn.signIn');
Route::view('/loading', 'loading');

Route::resource('users', UserController::class)->only(['store', 'show', 'update', 'destroy']);
