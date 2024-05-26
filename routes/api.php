<?php

use App\Http\Controllers\Api\{
    PermissionController,
    UserController
};
use App\Http\Controllers\Api\Auth\{
    AuthApiController
};
use Illuminate\Support\Facades\Route;

Route::post('/me', [AuthApiController::class, 'me'])
    ->name('auth.me')
    ->middleware('auth:sanctum');

Route::post('/logout', [AuthApiController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth:sanctum');

Route::post('/auth', [AuthApiController::class, 'auth'])->name('auth.login');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/permissions', PermissionController::class);
    Route::apiResource('/users', UserController::class);
});

Route::get('/', fn () => response()->json(['message' => 'ok']));
