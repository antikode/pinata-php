<?php

namespace Antikode\PinataCloud;

use Illuminate\Support\ServiceProvider;

class MyPinataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__.'/../config/pinata.php' => config_path('pinata.php')
        ], 'pinata-config');
    }

    public function register()
    {
        $this->app->singleton(MyPinata::class, function () {
            return new MyPinata();
        });
    }
}
