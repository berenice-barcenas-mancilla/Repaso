<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\RegisterController;
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


// Ruta principal
Route::get('/', [LibraryController::class, 'index'])->name('home');

// Ruta de registro
Route::get('/register', [RegisterController::class, 'index'])->name('libros');

// Ruta para guardar registro
Route::post('/save', [RegisterController::class, 'save'])->name('save');
