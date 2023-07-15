<?php

namespace DayCod\Charable;

use DayCod\Charable\CharableFunction;
use Illuminate\Support\ServiceProvider;

class CharableServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('charable', function () {
            return new CharableFunction();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        # code...
    }
}
