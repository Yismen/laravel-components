<?php

use Illuminate\Support\Facades\Route;

if (app()->environment() !== 'production') {
    Route::middleware('web')->group(function () {
        Route::get('components', '\Dainsys\Components\Controllers\ComponentsController');
    });
}
