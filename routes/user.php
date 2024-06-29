<?php

use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User/')->middleware('auth','user')->group(function () {

    Route::get('Dashboard', [UserController::class, 'index'])->name('Dashboard');


});
