<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
#Route::get('/users', [UsersController::class, 'index'])->name('users.index');
#Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');
#Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::resource('users', UsersController::class);


Route::get('/professions', [ProfessionController::class, 'index'])->name('professions');

Route::get('/levels', [LevelController::class, 'index'])->name('levels');

#Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
