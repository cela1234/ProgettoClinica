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
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::post('/faq/update', [FaqController::class, 'update'])->name('faq.update');
Route::get('/faq/delete/{id}', [FaqController::class, 'destroy'])->name('faq.delete');

Route::view('/', 'home')
    ->name('home');

Route::view('/who', 'who')
    ->name('who');

//Route::view('/faq', 'faq')
    //->name('faq');


require __DIR__.'/auth.php';