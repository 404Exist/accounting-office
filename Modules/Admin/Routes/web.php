<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminsController;
use Modules\Admin\Http\Controllers\AuthController;
use Modules\Admin\Http\Controllers\PageImagesController;
use Modules\Admin\Http\Controllers\SettingsController;
use Modules\Admin\Http\Controllers\TeamMembersController;
use Modules\Admin\Http\Controllers\TextsController;
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
    Route::name('team')->apiResource('/members', TeamMembersController::class);
    Route::get('/texts', [TextsController::class, 'index'])->name('texts.index');
    Route::get('/texts/{text}', [TextsController::class, 'edit'])->name('texts.edit');
    Route::patch('/texts/{text}', [TextsController::class, 'update'])->name('texts.update');
    Route::get('/images', [PageImagesController::class, 'index'])->name('images.index');
    Route::patch('/images/{text}', [PageImagesController::class, 'update'])->name('images.update');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::patch('/settings', [SettingsController::class, 'update'])->name('settings.update');
    Route::get('/credentials', [AdminsController::class, 'index'])->name('profile.index');
    Route::patch('/credentials', [AdminsController::class, 'update'])->name('profile.update');
    Route::redirect('/', "/admin/settings")->name('dashboard');
});
