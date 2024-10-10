<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::prefix('login')->group(function() {
//     Route::get('/', [AuthController::class, 'showLogin'])->name('login');
//     Route::post('/', [AuthController::class, 'login']);
// });

// Route::prefix('register')->group(function() {
//     Route::get('/', [AuthController::class, 'showRegister'])->name('register');
//     Route::post('/', [AuthController::class, 'register'])->name('register-proccess');
// });

Route::get('/login', [LoginController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/', fn() => view('welcome'));

// Route::prefix('dashboard')->group(function() {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::prefix('all-items')->group(function() {
//         Route::get('/', [DashboardController::class, 'showAllItems']);
//         Route::get('/create', [DashboardController::class, 'showCreateItem']);
//         Route::post('/create', [DashboardController::class, 'createItem']);
//         Route::get('/edit/{id}', [DashboardController::class, 'showEditItem']);
//     });
//     Route::prefix('description-items')->group(function() {
//         Route::get('/', [DashboardController::class, 'showDescriptionItems']);
//         Route::get('/create', [DashboardController::class, 'showCreateDescriptionItem']);
//         Route::get('/edit/{id}', [DashboardController::class, 'showEditDescriptionItem']);
//     });
// });
