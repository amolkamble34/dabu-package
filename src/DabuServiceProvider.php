<?php

namespace Dabu\Service;

use Illuminate\Support\ServiceProvider;

class DabuServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
    }

    public function register()
    {
        $this->app->make('Dabu\Service\Controllers\InstallController');
        $this->app->make('Dabu\Service\Controllers\UpdateController');
    }
}
