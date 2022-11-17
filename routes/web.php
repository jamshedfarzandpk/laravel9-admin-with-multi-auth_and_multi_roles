<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

/* Admin Routes Start */

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('login', [AuthenticatedSessionController::class, 'showAdminLoginForm'])
            ->name('admin.login');
        Route::post('login', [AuthenticatedSessionController::class, 'adminLogin'])
            ->name('admin.login');
        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('admin.password.request');
        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('admin.password.email');
        Route::get('password-reset/{token}', [NewPasswordController::class, 'create'])
            ->name('admin.password.reset');
        Route::post('password-reset', [NewPasswordController::class, 'store'])
            ->name('admin.password.update');
    });

    // admin.auth middleware register in kernel.php
    Route::group(['middleware' => 'admin.auth:admin'], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');
        Route::post('logout', [AuthenticatedSessionController::class, 'destroyAdmin'])
            ->name('admin.logout');
        //Route::get('/register/admin', [RegisteredUserController::class, 'showAdminRegisterForm']);
        //Route::post('/register/admin', [RegisteredUserController::class, 'createAdmin']);
    });
});

/* Admin Routes End  */
