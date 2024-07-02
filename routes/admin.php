<?php

use App\Http\Controllers\admin\AdminCoinController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLotteryController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard', [AdminController::class, 'index'])->name('Dashboard');
    // Add Lotteries
    Route::get('/Add/Lottery', [AdminLotteryController::class, 'add'])->name('Add.Lottery');
    Route::post('/Store/Lottery', [AdminLotteryController::class, 'store'])->name('Store.Lottery');
    Route::get('/All/Lottery', [AdminLotteryController::class, 'all'])->name('All.Lottery');
    // Coins Routes
    Route::get('Add/Coin', [AdminCoinController::class, 'add'])->name('Add.Coins');
    Route::get('All/Coin', [AdminCoinController::class, 'all'])->name('All.Coins');
    Route::post('Store/Coin', [AdminCoinController::class, 'store'])->name('Store.Coins');
});
