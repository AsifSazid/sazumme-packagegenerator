<?php

namespace Sazumme\Packagegenerator;

use Illuminate\Support\ServiceProvider;

class packagegeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'packagegenerator');

        $this->publishes([
            __DIR__.'/../publishable/assets' => public_path('vendor/packagegenerator'),
        ], 'public');
    }
}