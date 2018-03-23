<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\RootApi;

class RootApiServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('app/Library/Services/RootApi', function ($app) {
            return new RootApi();
        });
    }
}
