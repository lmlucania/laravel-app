<?php

use App\Http\Controllers\Hospital\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth:staffs')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
