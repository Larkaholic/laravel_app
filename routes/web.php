<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ExampleController;

Route::get('/', [TaskController::class, 'index']);
Route::get('/example', [ExampleController::class, 'show']);

Route::resource('tasks', TaskController::class);
