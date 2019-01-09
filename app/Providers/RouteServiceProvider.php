<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

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

        $this->mapIcRoutes();

        $this->mapStockRoutes();

        $this->mapTesterRoutes();

        $this->mapTechnicianRoutes();

        $this->mapSupervisorRoutes();

    

        //
    }

    /**
     * Define the "supervisor" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapSupervisorRoutes()
    {
        Route::group([
            'middleware' => ['web', 'supervisor', 'auth:supervisor'],
            'prefix' => 'supervisor',
            'as' => 'supervisor.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/supervisor.php');
        });
    }

    /**
     * Define the "technician" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapTechnicianRoutes()
    {
        Route::group([
            'middleware' => ['web', 'technician', 'auth:technician'],
            'prefix' => 'technician',
            'as' => 'technician.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/technician.php');
        });
    }

    /**
     * Define the "tester" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapTesterRoutes()
    {
        Route::group([
            'middleware' => ['web', 'tester', 'auth:tester'],
            'prefix' => 'tester',
            'as' => 'tester.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/tester.php');
        });
    }

    /**
     * Define the "stock" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapStockRoutes()
    {
        Route::group([
            'middleware' => ['web', 'stock', 'auth:stock'],
            'prefix' => 'stock',
            'as' => 'stock.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/stock.php');
        });
    }

    /**
     * Define the "ic" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapIcRoutes()
    {
        Route::group([
            'middleware' => ['web', 'ic', 'auth:ic'],
            'prefix' => 'ic',
            'as' => 'ic.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/ic.php');
        });
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
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
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
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
