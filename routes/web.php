<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoList\AddEntryController;
use App\Http\Controllers\TodoList\DeleteEntryController;
use App\Http\Controllers\TodoList\EditEntryController;
use App\Http\Controllers\TodoList\ListEntryController;
use Illuminate\Support\Facades\Route;
use Psy\Command\EditCommand;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'/*, 'verified'*/])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/todo')->group(function() {
    Route::get('/', [ListEntryController::class, 'index'])->name('todolist');
  
  Route::post('/add', [AddEntryController::class, 'add'])->name('todolist.add');
  
  Route::get('/delete/{id}', [DeleteEntryController::class, 'delete'])->name('todolist.delete');
  
  Route::post('/edit/{id}', [EditEntryController::class, 'edit'])->name('todolist.edit');
  });

require __DIR__.'/auth.php';
