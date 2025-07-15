<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Authentication

Route::get('/login', function () {
    return view('/pages/auth/login');
})->name('login');

Route::get('/register', function () {
    return view('/pages/auth/register');
})->name('register');

Route::get('/new-password', function () {
    return view('/pages/auth/new-password');
})->name('new-password');

Route::get('/reset-password', function () {
    return view('/pages/auth/reset-password');
})->name('reset-password');

Route::get('/welcome-message', function () {
    return view('/pages/auth/welcome-message');
})->name('welcome-message');
Route::get('/verify-email', function () {
    return view('/pages/auth/verify-email');
})->name('verify-email');
Route::get('/password-confirmation', function () {
    return view('/pages/auth/password-confirmation');
})->name('password-confirmation');

Route::get('/account-deletion', function () {
    return view('/pages/auth/account-deletion');
})->name('account-deletion');


// Route::middleware('auth')->group(
// function () {
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

Route::get('/account/edit', [AccountController::class, 'edit'])->name('account.settings');
Route::get('/account/{account}', [AccountController::class, 'update'])->name('account.settings.update');

Route::get('/account/password', [AccountController::class, 'editPassword'])->name('account.password.edit');
Route::put('/account/password', [AccountController::class, 'updatePassword'])->name('account.password.update');
// }
// );

Route::prefix('user-management')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user}', [UserController::class, 'show']);
});
Route::get('set-locale/{locale}', function ($locale) {
    if (in_array($locale, config('app.locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('set-locale');


Route::get('/error', function () {
    abort(500);
});
