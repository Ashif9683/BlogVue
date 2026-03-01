<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (): void {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::apiResource('posts', PostController::class);
});
