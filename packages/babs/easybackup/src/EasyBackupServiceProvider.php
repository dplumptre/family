<?php

namespace Babs\Easybackup;

use Illuminate\Support\ServiceProvider;
use Babs;

class EasyBackupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/helpers.php';

        $this->publishes([
            __DIR__.'/config/easybackup.php' => config_path('easybackup.php'),
        ], 'config');

        $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ( $this->app->runningInConsole() )
        {
            $this->commands([
                Babs\Easybackup\Commands\EasyBackup::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Babs\Easybackup\EasyBackupController');
    }
}
