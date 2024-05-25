<?php

use App\Http\Controllers\Api\{
    PermissionController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::apiResource('/permissions', PermissionController::class);
Route::apiResource('/users', UserController::class);

Route::get('/', fn () => response()->json(['message' => 'ok']));
