<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountInventoryController;
use App\Http\Controllers\CollectionDayController;
use App\Http\Controllers\DailyCollectionController;
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
Route::post('/', [HomeController::class, 'store'])->name('home.store');

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

// Account
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
Route::get('/accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');
Route::get('/accounts/{account}', [AccountController::class, 'show'])->name('accounts.show');
Route::get('/accounts/{account}/edit', [AccountController::class, 'edit'])->name('accounts.edit');
Route::put('/accounts/{account}', [AccountController::class, 'update'])->name('accounts.update');
Route::delete('/accounts/{account}', [AccountController::class, 'destroy'])->name('accounts.destroy');

// Collection_Day (days)
Route::get('/collection_Days', [CollectionDayController::class, 'index'])->name('collection_Days.index');
Route::get('/collection_Days/create', [CollectionDayController::class, 'create'])->name('collection_Days.create');
Route::post('/collection_Days', [CollectionDayController::class, 'store'])->name('collection_Days.store');
Route::get('/collection_Days/{collection_Day}', [CollectionDayController::class, 'show'])->name('collection_Days.show');
Route::get('/collection_Days/{collection_Day}/edit', [CollectionDayController::class, 'edit'])->name('collection_Days.edit');
Route::put('/collection_Days/{collection_Day}', [CollectionDayController::class, 'update'])->name('collection_Days.update');
Route::delete('/collection_Days/{collection_Day}', [CollectionDayController::class, 'destroy'])->name('collection_Days.destroy');

// Daily_collections
Route::get('/daily_Collections', [DailyCollectionController::class, 'index'])->name('daily_Collections.index');
Route::get('/daily_Collections/create', [DailyCollectionController::class, 'create'])->name('daily_Collections.create');
Route::post('/daily_Collections', [DailyCollectionController::class, 'store'])->name('daily_Collections.store');
Route::get('/daily_Collections/{daily_Collection}', [DailyCollectionController::class, 'show'])->name('daily_Collections.show');
Route::get('/daily_Collections/{daily_Collection}/edit', [DailyCollectionController::class, 'edit'])->name('daily_Collections.edit');
Route::put('/daily_Collections/{daily_Collection}', [DailyCollectionController::class, 'update'])->name('daily_Collections.update');
Route::delete('/daily_Collections/{daily_Collection}', [DailyCollectionController::class, 'destroy'])->name('daily_Collections.destroy');

// Account_inventory
Route::get('/account_Inventories', [AccountInventoryController::class, 'index'])->name('account_Inventories.index');
Route::get('/account_Inventories/create', [AccountInventoryController::class, 'create'])->name('account_Inventories.create');
Route::post('/account_Inventories', [AccountInventoryController::class, 'store'])->name('account_Inventories.store');
Route::get('/account_Inventories/{account_Inventory}', [AccountInventoryController::class, 'show'])->name('account_Inventories.show');
Route::get('/account_Inventories/{account_Inventory}/edit', [AccountInventoryController::class, 'edit'])->name('account_Inventories.edit');
Route::put('/account_Inventories/{account_Inventory}', [AccountInventoryController::class, 'update'])->name('account_Inventories.update');
Route::delete('/account_Inventories/{account_Inventory}', [AccountInventoryController::class, 'destroy'])->name('account_Inventories.destroy');
