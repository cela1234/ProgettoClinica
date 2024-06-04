<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClinicoController;
use App\Http\Controllers\PazienteController;

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

//Route::get('/', function () {
   // return view('home');
//});

//faq
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::post('/faq/update', [FaqController::class, 'update'])->name('faq.update');
Route::get('/faq/delete/{id}', [FaqController::class, 'destroy'])->name('faq.delete');

Route::view('/', 'home')
    ->name('home');

Route::view('/who', 'who')
    ->name('who');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
}); // End Group Admin Middleware

Route::middleware(['auth','role:clinico'])->group(function(){
    Route::get('/clinico/dashboard', [ClinicoController::class, 'ClinicoDashboard'])->name('clinico.dashboard');
}); // End Group Clinico Middleware

Route::middleware(['auth','role:paziente'])->group(function(){
    Route::get('/paziente/dashboard', [PazienteController::class, 'PazienteDashboard'])->name('paziente.dashboard');
}); // End Group Paziente Middleware



