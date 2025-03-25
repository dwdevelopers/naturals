<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHome;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactUsController;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectActivitiesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Category;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showUserLoginForm'])
    ->name('login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'userLogin'])->name('login');

// Admin login
Route::get('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])
    ->name('admin.login');
Route::post('admin/login', [\App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');


Route::middleware(['auth', 'user-access:Admin', 'prevent-back-history'])
    ->group(function () {
        Route::get('/admin-home', [AdminHome::class, 'index'])->name('admin.home');   
        Route::resource('contactuses', ContactUsController::class);
        Route::resource('products', ProductController::class)->parameter('products', 'product');
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('activities', ProjectActivitiesController::class);
    });


Route::name('website.')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/contact-us', [HomeController::class, 'contactUS'])->name('contact');
    // Route::get('/service/{slug}', [HomeController::class, 'services'])->name('service');
});
Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
