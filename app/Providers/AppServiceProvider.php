<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProjectRepository;
use App\Repositories\ProjectRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\TestimonialRepository;
use App\Repositories\TestimonialRepositoryInterface;
use App\Repositories\ContactUsRepository;
use App\Repositories\ContactUsRepositoryInterface;
use App\Repositories\ProjectActivityRepository;
use App\Repositories\ProjectActivityRepositoryInterface;
use App\Repositories\ProductDetailsRepository;
use App\Repositories\ProductDetailsRepositoryInterface;
use App\Repositories\ServiceRepositoryInterface;
use App\Repositories\ServiceRepository;
use App\Repositories\GalleryCategoryRepositoryInterface;
use App\Repositories\GalleryCategoryRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\GalleryRepositoryInterface;
use App\Repositories\DownloadRepository;
use App\Repositories\DownloadRepositoryInterface;
use App\Repositories\DownloadCategoryRepository;
use App\Repositories\DownloadCategoryRepositoryInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(ContactUsRepositoryInterface::class, ContactUsRepository::class);
        $this->app->bind(ProjectActivityRepositoryInterface::class, ProjectActivityRepository::class);
        $this->app->bind(ProductDetailsRepositoryInterface::class, ProductDetailsRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(GalleryCategoryRepositoryInterface::class, GalleryCategoryRepository::class);
        $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);
        $this->app->bind(DownloadRepositoryInterface::class, DownloadRepository::class);
        $this->app->bind(DownloadCategoryRepositoryInterface::class, DownloadCategoryRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
