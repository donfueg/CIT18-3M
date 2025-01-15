<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Route for greeting
Route::get('/greet', [GreetController::class, 'showGreeting']);