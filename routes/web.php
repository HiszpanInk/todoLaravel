<?php

use App\Http\Controllers\TodoListAddController;
use App\Http\Controllers\TodoListDeleteController;
use App\Http\Controllers\TodoListEditController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/todo', [TodoListController::class, 'index'])->name('todolist');

Route::post('/todo/add', [TodoListAddController::class, 'add'])->name('todolist.add');

Route::get('/todo/delete/{id}', [TodoListDeleteController::class, 'delete'])->name('todolist.delete');

Route::post('/todo/edit/{id}', [TodoListEditController::class, 'edit'])->name('todolist.edit');