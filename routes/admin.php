<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminLotteryController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function () {

    Route::get('Dashboard', [AdminController::class, 'index'])->name('Dashboard');
    // Add Lotteries
    Route::get('/Add/Lottery',[AdminLotteryController::class,'add'])->name('Add.Lottery');
    Route::post('/Store/Lottery',[AdminLotteryController::class,'store'])->name('Store.Lottery');


});
