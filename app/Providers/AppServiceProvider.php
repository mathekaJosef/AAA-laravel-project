<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5

class AppServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
=======
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
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
    {
        //
    }
}
