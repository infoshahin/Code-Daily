<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register ServiceProviders
//        ServiceProvider::register('\Way\Generators\GeneratorsServiceProvider');

        // Register aliases
//        $alias = AliasLoader::getInstance();
//        $alias->alias('Debugbar', 'Barryvdh\Debugbar\Facade');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
