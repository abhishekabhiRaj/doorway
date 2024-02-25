<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Doorway\Providers\DoorwayServiceProvider;
use App\Services\Doorway\Providers\RouteServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(DoorwayServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
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
