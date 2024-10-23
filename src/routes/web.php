<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest']], static function () {
    Route::get('/', static function () {
        return view('welcome');
    });
});
