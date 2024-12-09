<?php


/**
 * Author: Amir Hossein Jahani | iAmir.net
 * Last modified: 9/13/20, 6:07 PM
 * Copyright (c) 2020. Powered by iamir.net
 */

namespace iLaravel\iTranslateLocation\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if($this->app->runningInConsole())
        {
            if (itranslate_location('database.migrations.include', true))
                $this->loadMigrationsFrom(itranslate_location_path('database/migrations'));
        }
        $this->mergeConfigFrom(itranslate_location_path('config/itranslate_location.php'), 'ilaravel.main.itranslate_location');
    }

    public function register()
    {
        parent::register();
    }
}
