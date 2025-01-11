<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('about');
})->name('home');

Route::get('/specs', [PageController::class, 'specs'])->name('specs');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/order', [OrderController::class, 'showForm'])->name('order');

Route::post('/submit', [OrderController::class, 'submit'])->name('submit');

