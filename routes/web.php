<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(
    function () {
        Route::get('/chat', [App\Http\Controllers\Chat\ChatController::class, 'index'])->name("chat");
        Route::post('/chat/message', [App\Http\Controllers\Chat\ChatController::class, 'store'])->name("store");
        Route::get('/chat/messages', [App\Http\Controllers\Chat\ChatController::class, 'list'])->name("list");
        Route::get('/profile', [App\Http\Controllers\User\UserController::class, 'index'])->name("profile");
        Route::post('/profile', [App\Http\Controllers\User\UserController::class, 'update'])->name("update-profile");
    }
);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
