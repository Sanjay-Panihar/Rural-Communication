<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonateController;



Route::get('/', [HomeController::class, 'home']);
Route::get('/aboutUs', [HomeController::class, 'aboutUs']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact_us', [HomeController::class, 'contactUs']);
Route::get('/donate', [DonateController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
