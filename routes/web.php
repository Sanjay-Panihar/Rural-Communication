<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonarDetailsController;
use App\Http\Controllers\ContactFormController;


Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/', [HomeController::class, 'home']);
Route::get('/aboutUs', [HomeController::class, 'aboutUs']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact_us', [HomeController::class, 'contactUs']);
Route::get('/donate', [DonateController::class, 'index']);
Route::post('/donate', [DonateController::class, 'store']);
Route::post('/payment-success', [DonateController::class, 'paymentSuccess']);
Route::post('/contact-form-store', [DonateController::class, 'contactForm']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('donar_details', DonarDetailsController::class);
    Route::resource('/contact-form', ContactFormController::class);
    });
require __DIR__.'/auth.php';
