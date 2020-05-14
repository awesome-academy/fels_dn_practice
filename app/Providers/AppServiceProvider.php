<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryRepository::class
        );
    }

    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            \App\Repositories\Word\WordRepositoryInterface::class,
            \App\Repositories\Word\WordRepository::class
        );
    }
}
