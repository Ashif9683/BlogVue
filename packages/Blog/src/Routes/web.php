<?php

use Illuminate\Support\Facades\Route;
use Blog\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('blog.home');
Route::get('/tailwind-practice', [HomeController::class, 'practice'])->name('blog.practice');
