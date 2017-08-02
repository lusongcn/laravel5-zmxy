<?php 
namespace Earnp\Zmxy;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
class ZmxyServiceprovider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    public function boot()
    {
        // this for conig
        $this->publishes([
            __DIR__.'/config/zmxy.php' => config_path('zmxy.php'),
        ]);
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */


    public function register()
    {
        $this->app->bind('zmxy',function($app){
            return new Zmxy();
        });
    }
}