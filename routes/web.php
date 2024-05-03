<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::post('/create', function () {
    return view('posts/create');
})->name('create');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [PostController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('destroy');
