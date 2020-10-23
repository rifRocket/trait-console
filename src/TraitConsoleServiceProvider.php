<?php

namespace Rifrocket\TraitConsole;

use Illuminate\Support\ServiceProvider;
use Rifrocket\TraitConsole\Console\Commands\Traitconsole;

class TraitConsoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {

        $this->commands([
            Traitconsole::class
        ]);
    }
}
