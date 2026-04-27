<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\MovieRepositoryInterface;
use App\Repositories\MovieRepository;
use App\Services\MovieService;
use MovieServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
    $this->app->bind(MovieRepositoryInterface::class, MovieRepository::class);
    $this->app->bind(MovieServiceInterface::class, MovieService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
