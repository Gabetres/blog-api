<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post('/post/create', [PostController::class, 'store'])->name('post.store');
