<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RarityController;
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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rarity
Route::get('/rarities', [RarityController::class, 'index'])->name('rarities.index');
Route::get('/rarities/create', [RarityController::class, 'create'])->name('rarities.create');
Route::post('/rarities', [RarityController::class, 'store'])->name('rarities.store');
Route::get('/rarities/{rarity}', [RarityController::class, 'show'])->name('rarities.show');
Route::get('/rarities/{rarity}/edit', [RarityController::class, 'edit'])->name('rarities.edit');
Route::put('/rarities/{rarity}', [RarityController::class, 'update'])->name('rarities.update');
Route::delete('/rarities/{rarity}', [RarityController::class, 'destroy'])->name('rarities.destroy');

// Fruit
