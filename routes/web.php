<?php

use App\Http\Controllers\TodoController;
use Faker\Guesser\Name;
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

// show todos list
Route::get("/todos", [TodoController::class, 'index']) -> name('todos.index');

// display todo detail
Route::get('/todos/show/{id}', [TodoController::class, 'show']) -> name('todos.show');

// add new task
Route::get('/todos/create', [TodoController::class, 'create']) -> name('todos.create');
Route::post('/todos/create', [TodoController::class, 'store']) -> name('todos.store');

// update task
Route::get('/todos/edit/{id}', [TodoController::class, 'edit']) -> name('todos.edit');
Route::patch('/todos/edit/{id}', [TodoController::class, 'update']) -> name('todos.update');

// delete task
Route::delete('/todos/delete/{id}', [TodoController::class, 'destroy'])-> name('todos.delete');
