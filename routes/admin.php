<?php

use App\Http\Controllers\admin\AdminCoinController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLotteryController;
use App\Http\Controllers\admin\AllTranscations;
use App\Http\Controllers\admin\FeaturedLotteries;
use App\Http\Controllers\admin\StoreController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth', 'admin')->group(function () {

    Route::get('Dashboard', [AdminController::class, 'index'])->name('Dashboard');
    // all Users
    Route::get('All/Users', [AdminController::class, 'users'])->name('All.Users');
    Route::get('Edit/User/{id}', [AdminController::class, 'editUser'])->name('Edit.User');
    Route::post('Update/User/{id}', [AdminController::class, 'updateUser'])->name('Update.User');
    // Featured Lotteries
    Route::get('Featured/Product', [FeaturedLotteries::class, 'addFeatured'])->name('Add.Featured.Lotteries');
    Route::get('All/Featured/Product', [FeaturedLotteries::class, 'allFeatured'])->name('All.Featured.Lotteries');
    Route::post('Store/Featured/Product', [FeaturedLotteries::class, 'storeFeatured'])->name('store.Featured.Lotteries');
    // Add Lotteries
    Route::get('/Add/Lottery', [AdminLotteryController::class, 'add'])->name('Add.Lottery');
    Route::post('/Store/Lottery', [AdminLotteryController::class, 'store'])->name('Store.Lottery');
    Route::get('/All/Lottery', [AdminLotteryController::class, 'all'])->name('All.Lottery');
    Route::get('/Edit/Lottery/{id}', [AdminLotteryController::class, 'edit'])->name('Edit.Lottery');
    Route::post('/Update/Lottery/{id}', [AdminLotteryController::class, 'update'])->name('Update.Lottery');
    Route::get('/Delete/Lottery/{id}', [AdminLotteryController::class, 'delete'])->name('Delete.Lottery');
    Route::get('All/Participants', [AdminLotteryController::class, 'participants'])->name('All.Participants');
    Route::get('Make/Winner/{user_name}', [AdminLotteryController::class, 'makeWinner'])->name('Make.Winner');
    // Coins Routes
    Route::get('Add/Coin', [AdminCoinController::class, 'add'])->name('Add.Coins');
    Route::get('All/Coin', [AdminCoinController::class, 'all'])->name('All.Coins');
    Route::post('Store/Coin', [AdminCoinController::class, 'store'])->name('Store.Coins');
    Route::get('Edit/Coin/{id}', [AdminCoinController::class, 'editCoin'])->name('Edit.Coin');
    Route::post('Update/Coin/{id}', [AdminCoinController::class, 'updateCoin'])->name('Update.Coin');
    Route::get('Delete/Coin/{id}', [AdminCoinController::class, 'deleteCoin'])->name('Delete.Coin');
    // Store Products
    Route::get('Add/Product', [StoreController::class, 'addProduct'])->name('Add.Product');
    Route::get('All/Product', [StoreController::class, 'allProduct'])->name('All.Products');
    Route::post('Store/Product', [StoreController::class, 'storeProduct'])->name('Store.Product');
    Route::get('Edit/Product/{id}', [StoreController::class, 'editProduct'])->name('Edit.Product');
    Route::post('Update/Product/{id}', [StoreController::class, 'updateProduct'])->name('Update.Product');
    Route::get('Delete/Product/{id}', [StoreController::class, 'deleteProduct'])->name('Delete.Product');
    // Transcations
    Route::get('Pending/Coin/Transcations', [AllTranscations::class, 'coinTranscations'])->name('Pending.Coin.Transcations');
    Route::get('Make/Transcation/Approve/{id}', [AllTranscations::class, 'makeTranscationApproved'])->name('Make.Transcation.Approved');
    Route::get('Edit/Transcation/{id}', [AllTranscations::class, 'editTranscation'])->name('Edit.Transcation');
    Route::post('Update/Transcation/{id}', [AllTranscations::class, 'update_coin_qty'])->name('Update.Coin.Qty');
});
