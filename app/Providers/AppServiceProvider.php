<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Session;//invocar para los mensajes flash
use Inertia\Inertia;//invocar

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Inertia::share('flash', function(){
            return ['status'=>Session::get('status')];
        });
    }
}
