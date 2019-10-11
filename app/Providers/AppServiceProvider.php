<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Shapes\Triangle;
use App\Http\Controllers\Shapes\Squire;
use App\Http\Controllers\Shapes\ShapeInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);

        $this->app->bind(ShapeInterface::class, function($app) {

            if(request()->has('squire')){
                return new Squire(10, 20);
            }

            return new Triangle(10, 20);
        });

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
