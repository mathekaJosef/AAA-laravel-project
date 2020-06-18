<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
<<<<<<< HEAD
=======
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
<<<<<<< HEAD
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
=======
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
<<<<<<< HEAD
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
=======
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
>>>>>>> 6298ed4ba9fd6ce8160054c06d19c2729d2e6ca5
    }
}
