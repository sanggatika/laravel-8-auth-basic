<?php

use Illuminate\Support\Facades\Route;

//controller
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;

//middleware
use App\Http\Middleware\AuthBasicMiddleware;

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
    return redirect()->route('auth.logout');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthenticationController::class, 'loginPage'])->name('auth.login');
    Route::get('register', [AuthenticationController::class, 'registerPage'])->name('auth.register');
    Route::get('forgot-password', [AuthenticationController::class, 'forgotpasswordPage'])->name('auth.forgot_password');

    Route::get('logout', [AuthenticationController::class, 'logoutAct'])->name('auth.logout');
        
    // action
    Route::post('act_login', [AuthenticationController::class, 'loginAct'])->name('auth.act_login');
    Route::post('act_register', [AuthenticationController::class, 'registerAct'])->name('auth.act_register');    
});

Route::prefix('adm')->group(function () {
    Route::middleware('AuthBasic')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'DashboardPage'])->name('adm.dash');
    });
});
