<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('users', UsersController::class);


Route::get('/professions', [ProfessionController::class, 'index'])->name('professions');

Route::get('/levels', [LevelController::class, 'index'])->name('levels');

#Auth::routes();
Route::resource('emails', EmailController::class);


// prueba
Route::get('/prueba', function () {
    return 'Has accedido a la ruta prueba!';
})->middleware('age');

Route::get('/no-autorizado', function () {
    return 'Usted NO es mayor de edad';
})->name('no-autorizado');
