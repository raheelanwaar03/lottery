<?php

use App\Http\Controllers\lotteryController;
use Illuminate\Support\Facades\Route;

Route::get('/',[lotteryController::class,'index'])->name('home');