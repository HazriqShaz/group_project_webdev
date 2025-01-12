<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('about');
})->name('home');

Route::get('/specs', [PageController::class, 'specs'])->name('specs');

Route::get('/order', [OrderController::class, 'showForm'])->name('order');

Route::post('/submit', [OrderController::class, 'submit'])->name('submit');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware('auth')->get('/dashboard', [OrderController::class, 'showOrders'])->name('dashboard');

Route::middleware('auth')->get('/dashboard/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::middleware('auth')->put('/dashboard/edit/{id}', [OrderController::class, 'update'])->name('order.update');
Route::middleware('auth')->delete('/dashboard/delete/{id}', [OrderController::class, 'destroy'])->name('order.delete');

Route::middleware('auth')->get('/dashboard/generate_pdf/{id}', [PdfController::class, 'generate'])->name('order.generate-pdf');
