<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('login')->group(function() {
    Route::get('/', [AuthController::class, 'showLogin']);
    Route::post('/', [AuthController::class, 'login']);
});

Route::prefix('register')->group(function() {
    Route::get('/', [AuthController::class, 'showRegister']);
    Route::post('/', [AuthController::class, 'register']);
});

Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::prefix('all-items')->group(function() {
        Route::get('/', [DashboardController::class, 'showAllItems']);
        Route::get('/create', [DashboardController::class, 'showCreateItem']);
        Route::post('/create', [DashboardController::class, 'createItem']);
        Route::get('/edit/{id}', [DashboardController::class, 'showEditItem']);
    });
    Route::prefix('description-items')->group(function() {
        Route::get('/', [DashboardController::class, 'showDescriptionItems']);
        Route::get('/create', [DashboardController::class, 'showCreateDescriptionItem']);
        Route::get('/edit/{id}', [DashboardController::class, 'showEditDescriptionItem']);
    });
});
