<?php

use Illuminate\Support\Facades\Route;
use Modules\Site\Http\Controllers\SiteController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('sites', SiteController::class)->names('site');
});


Route::prefix('v1')->group(function () {
    Route::post('site/test', [SiteController::class, 'test']);
});
