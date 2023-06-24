<?php

namespace App\Providers;

use App\Models\userXmas;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('admin', function(){
            $NIP = str_pad(Auth()->user()->NIP, 4, '0', STR_PAD_LEFT);
            return $NIP === "0000";
        });
    }
}
