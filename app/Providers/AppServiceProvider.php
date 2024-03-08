<?php

namespace App\Providers;

use App\Http\Resources\Products\GetProducts;
use App\Services\Products\ProductService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('product_service', ProductService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        GetProducts::withoutWrapping();
    }
}
