<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Repositories
use App\Repositories\InformationRepository\InformationRepository;
use App\Repositories\InformationRepository\InformationRepositoryInterface;
use App\Repositories\UserRepository\UserRepository;
use App\Repositories\UserRepository\UserRepositoryInterface;
// Services
use App\Services\InformationService\InformationService;
use App\Services\InformationService\InformationServiceInterface;
use App\Services\UserService\UserService;
use App\Services\UserService\UserServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Services
        $this->app->bind(InformationServiceInterface::class, InformationService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);

        // Repositories
        $this->app->bind(InformationRepositoryInterface::class, InformationRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
