<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route::get('/dasboard', [TaskController::class, 'index']
// })->middleware(['auth'])->name('welcome');
// Land on the Dashboard
Route::get('/dashboard', [TaskController::class, 'index'])->middleware(['auth'])->name('welcome');

// Land on the Dashboard
Route::get('/', [TaskController::class, 'index'])->middleware(['auth'])->name('dashboard');
// Sends you to the create task view 
Route::get('/create', [TaskController::class, 'create'])->middleware(['auth'])->name('task.create');
// Sends you to the edit view
Route::get('/edit', [TaskController::class, 'edit'])->middleware(['auth'])->name('task.edit');
// Sends updated data
Route::post('/update', [TaskController::class, 'update'])->middleware(['auth'])->name('task.update');
// Creates a new task
Route::post('/store', [TaskController::class, 'store'])->middleware(['auth'])->name('task.store');
// Deletes a task
Route::post('/delete', [TaskController::class, 'destroy'])->middleware(['auth'])->name('task.destroy');
// Deletes a task
Route::post('/comment', [TaskController::class, 'destroy'])->middleware(['auth'])->name('add_comment');

require __DIR__.'/auth.php';
