<?php

use App\Http\Controllers\Api\{
    PermissionController,
    PermissionUserController,
    UserController
};
use App\Http\Controllers\Api\Auth\{
    AuthApiController
};
use Illuminate\Support\Facades\Route;

Route::get('/me', [AuthApiController::class, 'me'])
    ->name('auth.me')
    ->middleware('auth:sanctum');

Route::post('/logout', [AuthApiController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth:sanctum');

Route::post('/auth', [AuthApiController::class, 'auth'])->name('auth.login');

Route::middleware(['auth:sanctum', 'acl'])->group(function () {
    Route::apiResource('/permissions', PermissionController::class);

    Route::get('/users/{user}/permissions', [PermissionUserController::class, 'getPermissionsOfUser'])
        ->name('users.permissions');

    Route::post('/users/{user}/permissions-sync', [PermissionUserController::class, 'syncPermissionsOfUser'])
        ->name('users.permissions.sync');

    Route::apiResource('/users', UserController::class);
});

Route::get('/', fn () => response()->json(['message' => 'ok']));
