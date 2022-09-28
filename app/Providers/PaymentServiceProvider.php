<?php

namespace App\Providers;

use App\Service\PaypalService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

//DeferrableProvider is used when provider when needed in that case we can use DeferrableProvider

class PaymentServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       /*
       singleton is used to create single instance of class
       $this->app->singleton(PaypalService::class, function(){
            return new PaypalService("thetestcoder-".rand(1,1500));
        });*/

        //other way to use single instance of class
        $this->app->bind(PaypalService::class, function(){
            return new PaypalService("thetestcoder-".rand(1,1500));
        },true);

    }

    //below function is provided by DeferrableProvider
    public function provides()
    {
        return [PaypalService::class];
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
