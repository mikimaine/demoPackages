<?php
/**
 * Created by PhpStorm.
 * User: MIKI$
 * Date: 2/19/2016
 * Time: 1:26 AM
 */

namespace Mikimaine\Demo;


use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
        $this->app->bind("mikimaine-demo",function(){
             return new Demo;
        });

        $this->mergeConfigFrom(__DIR__.'/config/main.php','mikimaine-demo-main');

    }
    public function boot()
    {
        require __DIR__.'/Http/routes.php';

        $this->loadViewsFrom(__DIR__.'/views','mikimaine-demo');

        $this->loadTranslationsFrom(__DIR__.'/Lang','mikimaine-demo');

    }
}