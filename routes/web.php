<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\StudentAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('esn.guest')->group(function () {

    Route::get('/register/{id}', [StudentAuthController::class, 'register'])->name('register');

    Route::post('/register/{id}', [StudentAuthController::class, 'register_submit'])->name('register.submit');
});


Route::middleware('esn.auth')->group(function () {

    Route::get('/me', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/me/stats', [DashboardController::class, 'stats'])->name('dashboard.stats');

    Route::get('/me/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');

    Route::post('/logout', [StudentAuthController::class, 'logout'])->name('logout');

});


Route::get('/info/terms', [InfoController::class, 'terms_and_conditions'])->name('terms-and-conditions');

Route::get('/about', [InfoController::class, 'about'])->name('about');


Route::get('admin/login', function () {
    return view('admin.login');
});


Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
