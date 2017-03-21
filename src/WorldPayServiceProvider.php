<?php

namespace Alvee\WorldPay;

use Illuminate\Support\ServiceProvider;

class WorldPayServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //require __DIR__."/Http/Routes.php";

        //$this->loadViewsFrom(__DIR__.'/Views', 'Worldpay');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/config/config.php'  => config_path('worldpay.php'),
            __DIR__ . '/views/worldpay.php' => resource_path('views/vendor/alvee/worldpay.php'),
        ]);
    }

}
