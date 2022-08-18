<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.main');
// });
Route::get('/', [HomeController::class, 'home']);
Route::get('/aboutUs', [HomeController::class, 'aboutUs']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/contact_us', [HomeController::class, 'contactUs']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
