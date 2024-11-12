<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('home.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::get('/task/store', [TaskController::class, 'store'])->name('task.store');
