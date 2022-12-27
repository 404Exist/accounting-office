<?php

use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AuthController;
use Modules\Admin\Http\Controllers\UsersController;
use Modules\Admin\Http\Middleware\Auth;
use Modules\Admin\Http\Middleware\Guest;

Route::middleware(Guest::class)->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('/password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::post('/password/reset', [AuthController::class, 'reset'])->name('password.update');
});

Route::middleware(Auth::class)->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::view('/ecommerce-dashboard', 'admin::ecommerce-dashboard')->name('ecommerce.dashboard');
    Route::apiResource('/users', UsersController::class);
    Route::patch('/users/{id}/restore', [UsersController::class, 'restore'])->name('users.restore');
    Route::get('/users/{user}/login', [UsersController::class, 'login'])->name('users.login');
});
