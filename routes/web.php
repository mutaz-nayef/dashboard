<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\App;
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

Route::get('/two-factor', function () {
    return view('/pages/auth/two-factor');
})->name('two-factor');

// User Profile

Route::prefix('/users/user-profile')->group(
    function () {

        Route::get('/overview', function () {
            return view('pages.user-profile.overview');
        })->name('user-profile-overview');
    }
);

Route::get('/set-lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('set-lang');


Route::get('/debug-locale', function () {
    return [
        'session_locale' => session('locale'),
        'app_locale' => app()->getLocale(),
        'fallback_locale' => config('app.fallback_locale'),
        'current_url' => url()->current(),
    ];
});
Route::get('/error', function () {
    abort(500);
});
