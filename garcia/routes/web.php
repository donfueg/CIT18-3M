<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Route for greeting
Route::get('/greet', [GreetController::class, 'showGreeting']);

