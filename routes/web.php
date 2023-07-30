<?php

use App\Http\Controllers\FruitController;
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
Route::get('/fruits', [FruitController::class, 'index'])->name('fruits.index');
Route::get('/fruits/create', [FruitController::class, 'create'])->name('fruits.create');
Route::post('/fruits', [FruitController::class, 'store'])->name('fruits.store');
Route::get('/fruits/{fruit}', [FruitController::class, 'show'])->name('fruits.show');
Route::get('/fruits/{fruit}/edit', [FruitController::class, 'edit'])->name('fruits.edit');
Route::put('/fruits/{fruit}', [FruitController::class, 'update'])->name('fruits.update');
Route::delete('/fruits/{fruit}', [FruitController::class, 'destroy'])->name('fruits.destroy');
