<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Authentication
Route::prefix('/authentication')->group(function () {
    Route::get('/sign-in', [AuthenticationController::class, 'signIn'])->name('sign-in');
    Route::post('/sign-in/post', [AuthenticationController::class, 'signIn_'])->name('signIn_');

    Route::get('/sign-up', [AuthenticationController::class, 'signUp'])->name('sign-up');
    Route::post('/sign-up/post', [AuthenticationController::class, 'signUp_'])->name('signUp_');
    Route::get('/sign-out', [AuthenticationController::class, 'signOut'])->name('sign-out');
});

// Subpages
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/invoice', [PagesController::class, 'invoice'])->name('invoice');
    Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
    Route::get('/wizard', [PagesController::class, 'wizard'])->name('wizard');
});

// Account
Route::middleware(['auth', 'role:user'])->prefix('/account')->group(function () {
    Route::get('/overview', [AccountController::class, 'overview'])->name('overview');

    Route::get('/settings', [AccountController::class, 'settings'])->name('settings');
    Route::post('/settings/post', [AccountController::class, 'settings_'])->name('settings_');

    Route::get('/billing', [AccountController::class, 'billing'])->name('billing');
    Route::get('/statements', [AccountController::class, 'statements'])->name('statements');
});

// Admin Dashboard
Route::middleware(['auth', 'role:admin'])->prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
