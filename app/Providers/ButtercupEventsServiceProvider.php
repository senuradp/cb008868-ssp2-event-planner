<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ButtercupEvents;

class ButtercupEventsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('ButtercupEvents', function ($app) {
            return new ButtercupEvents();
        });
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
