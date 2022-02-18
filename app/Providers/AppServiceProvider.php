<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Rosamarsky\CommandBus\NameInflector;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->singleton(
//            NameInflector::class,
//            \App\NameInflector\NameInflector::class
//
//        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
