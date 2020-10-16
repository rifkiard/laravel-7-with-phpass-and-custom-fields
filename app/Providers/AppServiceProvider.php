<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Libraries\PasswordHash;
use Illuminate\Support\Facades\Hash;

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
        Hash::extend("phpass", function ($app) {
            return new PasswordHash(8, false);
        });
    }
}
