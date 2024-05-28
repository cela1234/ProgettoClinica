<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')
    ->name('home');

Route::view('/who', 'home')
    ->name('who');

Route::view('/faq', 'home')
    ->name('faq');


require __DIR__.'/auth.php';