<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

/* PROJECTS */
Route::prefix('/project')->name('project.')->group(function () {
    Route::get('/index', [ProjectController::class, 'index'])->name('index');
    Route::get('/create', [ProjectController::class, 'create'])->name('create');
    Route::post('/store', [ProjectController::class, 'store'])->name('store');
    Route::get('/edit', [ProjectController::class, 'edit'])->name('edit');
    Route::put('/update', [ProjectController::class, 'update'])->name('update');
    Route::delete('/delete', [ProjectController::class, 'delete'])->name('delete');

    Route::prefix('/task')->name('task.')->group(function () {

    });
});


