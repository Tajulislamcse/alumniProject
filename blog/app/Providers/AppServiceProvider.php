<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
      
        $this->app->bind(
            'App\ViewModels\ICreateProductModel',
            'App\ViewModels\CreateProductModel'
        );
        $this->app->bind(
            'App\BusinessObjects\IBook',
            'App\BusinessObjects\Book'
        );
        $this->app->bind(
            'App\Services\IProductService',
            'App\Services\ProductService'
        );
        $this->app->bind(
            'App\Repositories\IProductRepository',
            'App\Repositories\ProductRepository'
        );
        $this->app->bind(
            'App\ViewModels\IViewProductModel',
            'App\ViewModels\ViewProductModel'
        );

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Schema::defaultStringLength(191);
    }
}
