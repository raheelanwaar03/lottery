<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LandingPageController::class,'welcome'])->name('Welcome');
Route::get('/Contest',[LandingPageController::class,'contest'])->name('Contest');
Route::get('/Winner',[LandingPageController::class,'winner'])->name('Winner');
Route::get('/AboutUs',[LandingPageController::class,'aboutUs'])->name('AboutUs');
Route::get('/Product/Detail',[LandingPageController::class,'detail'])->name('detail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
