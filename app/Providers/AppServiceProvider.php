<?php

namespace App\Providers;

use Eclipse\Billings\BillingGateway;
use Eclipse\Billings\StripeBilling;
use Eclipse\Billings\TwocheckoutBilling;
use Eclipse\Repositories\Booking\BookingRepository;
use Eclipse\Repositories\Booking\BookingRepositoryInterface;
use Eclipse\Repositories\Category\CategoryRepository;
use Eclipse\Repositories\Category\CategoryRepositoryInterface;
use Eclipse\Repositories\Package\PackageRepository;
use Eclipse\Repositories\Package\PackageRepositoryInterface;
use Eclipse\Repositories\User\UserRepository;
use Eclipse\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(PackageRepositoryInterface::class, PackageRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(BookingRepositoryInterface::class, BookingRepository::class);
        $this->app->bind(BillingGateway::class, StripeBilling::class);
    }
}
