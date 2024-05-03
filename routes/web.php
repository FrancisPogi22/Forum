<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
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

Route::get('/register', function () {
    return view('userpages/register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

Route::controller(AuthenticationController::class)->group(function () {
    Route::post('/login', 'login')->name('login.user');
    Route::get('/logout', 'logout')->name('logout.user');
});
