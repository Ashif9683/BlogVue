<?php

use Illuminate\Support\Facades\Route;
use Blog\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('blog.home');
