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

Route::get('/users/{userId}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/users/{userId}/update/{name}/{email}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');


