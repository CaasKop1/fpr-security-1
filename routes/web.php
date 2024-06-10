<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FooBarController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::resource('/foobars', FooBarController::class)->names([
        'index'   => 'foobars.index',
        'create'  => 'foobars.create',
        'store'   => 'foobars.store',
        'show'    => 'foobars.show',
        'edit'    => 'foobars.edit',
        'update'  => 'foobars.update',
        'destroy' => 'foobars.destroy'
    ]);

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(GuestMiddleware::class)->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::post('/register/store', [AuthController::class, 'register'])->name('register.store');
});
