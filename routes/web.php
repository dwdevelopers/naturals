<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\AdminDownloadController;
use App\Http\Controllers\Admin\AdminSubscriptionController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DownloadCategoryController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController as AdminHome;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\ProjectActivitiesController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController as WebsiteContactUs;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\GalleryController as WebsiteGallery;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as WebsiteProduct;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

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
        Route::resource('product-details', ProductDetailsController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('activities', ProjectActivitiesController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('gallery-categories', GalleryCategoryController::class);
        Route::resource('galleries', GalleryController::class);
        Route::resource('subscriptions', AdminSubscriptionController::class);
        Route::resource('downloads', AdminDownloadController::class);
        Route::resource('download-categories', DownloadCategoryController::class);
    });

Route::name('website.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/contact-us', [HomeController::class, 'contactUS'])->name('contact');
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus');
    Route::get('/service', [ServicesController::class, 'index'])->name('service');
    Route::get('/gallery', [WebsiteGallery::class, 'index'])->name('gallery');
    Route::get('/downlaod', [DownloadController::class, 'index'])->name('downloads');
    Route::get('/contact-us', [WebsiteContactUs::class, 'index'])->name('contactUs');
    Route::get('/product', [WebsiteProduct::class, 'index'])->name('product');
    Route::get('/service/{slug}', [ServicesController::class, 'show'])->name('service.detail');
    Route::get('/product/slug', [WebsiteProduct::class, 'show'])->name('product.detail');
    Route::post('/contact', [WebsiteContactUs::class, 'store'])->name('contact.submit');
    Route::post('/subscription', [SubscriptionController::class, 'store'])->name('subscription.submit');

});
Auth::routes();

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
