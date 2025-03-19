<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::name('website.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/contact-us', [HomeController::class, 'contactUS'])->name('contact');
    // Route::get('/service/{slug}', [HomeController::class, 'services'])->name('service');
});