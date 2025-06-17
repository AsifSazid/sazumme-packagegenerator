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
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'packagegenerator');

        $this->publishes([
            __DIR__.'/../publishable/assets' => public_path('vendor/packagegenerator'),
        ], 'public');
        $this->commands([
            ##InstallationCommandClass##
        ]);

        $this->layouts();
        $this->libs();
        $this->partials();

    }
    
    public function layouts()
    {
        \Illuminate\Support\Facades\Blade::component('spg-app-master', \Sazumme\Packagegenerator\App\View\Components\Backend\Layouts\Master::class);
    }

    private function libs()
    {
        \Illuminate\Support\Facades\Blade::component('spg-style', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Libs\Style::class);
        \Illuminate\Support\Facades\Blade::component('spg-js', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Libs\Js::class);
    }

    private function partials()
    {
        \Illuminate\Support\Facades\Blade::component('spg-meta', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Partials\Meta::class);
        \Illuminate\Support\Facades\Blade::component('spg-dummy', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Partials\Dummy::class);
        \Illuminate\Support\Facades\Blade::component('spg-breadcrumb', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Partials\Breadcrumb::class);
        \Illuminate\Support\Facades\Blade::component('spg-title', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Partials\Title::class);
        \Illuminate\Support\Facades\Blade::component('spg-favicon', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Partials\Favicon::class);
        
        
        \Illuminate\Support\Facades\Blade::component('spg-aside', \Sazumme\Packagegenerator\App\View\Components\backend\Layouts\Partials\Aside::class);
    }
}