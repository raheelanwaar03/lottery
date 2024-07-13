<?php

use App\Http\Controllers\user\PurchaseLottery;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User/')->middleware('auth', 'user')->group(function () {

    Route::get('Dashboard', [UserController::class, 'index'])->name('Dashboard');
    Route::get('Store', [UserController::class, 'store'])->name('Store');
    Route::get('Coins', [UserController::class, 'coins'])->name('Coins');
    Route::get('Buy/Coins/{id}', [UserController::class, 'buyCoins'])->name('Buy.Coins');
    Route::post('Coin/Data/{id}', [UserController::class, 'coinData'])->name('Purchased.Coins');
    // take part in lottery
    Route::post('Purchase/Lottery/{id}', [PurchaseLottery::class, 'purchaseLottery'])->name('Purchase.Lottery');
});
