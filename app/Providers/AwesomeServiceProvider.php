<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AwesomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('App\Service\AwesomeServiceInterface','App\Service\AwesomeService');
        //$this->app->bind(AwesomeServiceInterface::class,AwesomeService::class);
        //App::bind(AwesomeServiceInterface::class,AwesomeService::class);
        app()->bind(AwesomeServiceInterface::class,AwesomeService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
