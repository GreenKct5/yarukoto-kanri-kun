<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TodoController;
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

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
Route::post('/home', [SubjectController::class, 'store'])->middleware('auth')->name('home.store');
Route::get('/createTodo', [TodoController::class, 'create'])->middleware('auth')->name('todos.create');
Route::post('/destroyTodo/{id}', [TodoController::class, 'destroy'])->name('todos.destroy')->middleware('auth');
Route::post('/createTodo', [TodoController::class, 'store'])->middleware('auth')->name('todos.store');
Route::get('/api/groups/{group}/subjects', [GroupController::class, 'getSubjects'])->middleware('auth');

Route::view('/myPage', 'myPage.myPage')->middleware('auth');
Route::get('/myPage', [MyPageController::class, 'index'])->middleware('auth')->name('mypage.index');
Route::post('/myPage', [MyPageController::class, 'update'])->middleware('auth')->name('mypage.update');
Route::view('/signUp', 'signUp.signUp');
Route::view('/signIn', 'signIn.signIn');
Route::view('/loading', 'loading');
Route::get('/loading', [HomeController::class, 'loading'])->name('loading.home');

Route::resource('users', UserController::class)->only(['store', 'update', 'destroy']);
Route::post('/signIn', [UserController::class, 'login'])->name('signIn');
