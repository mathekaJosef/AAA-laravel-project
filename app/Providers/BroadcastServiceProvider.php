<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
=======
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
