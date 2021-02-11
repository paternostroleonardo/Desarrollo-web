<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class FacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        App::bind('impresora',function() {
           return new App\Helpers\Impresora;
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
