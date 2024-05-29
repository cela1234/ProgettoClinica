<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
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

//faq


Route::view('/', 'home')
    ->name('home');

Route::view('/who', 'home')
    ->name('who');



require __DIR__.'/auth.php';