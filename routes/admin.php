<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin/')->middleware('auth','admin')->group(function () {

    Route::get('Dashboard', [AdminController::class, 'index'])->name('Dashboard');


});
