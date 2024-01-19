<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\LoginController;
use App\http\controllers\FormController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('/register', [FormController::class, 'index'])->name('register');
Route::post('/create-register', [FormController::class, 'store'])->name('registration');
