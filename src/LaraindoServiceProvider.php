<?php

/**
 * @author AfrizalMY <saweria.co/afrizalmy>
 * @license MIT
 */

namespace Laraindo;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaraindoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/laraindo.php', 'laraindo'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerDirectives();
        $this->publishes([
            __DIR__ . '/config/laraindo.php' => config_path('laraindo.php'),
            __DIR__ . '/Localization/lang/id' => lang_path('id'),
        ]);
    }

    /**
     * Register all directives
     *
     * @return void
     */
    public function registerDirectives()
    {
        $directives = require __DIR__.'/directives/directives.php';

        collect($directives)->each(function ($item, $key) {
            Blade::directive($key, $item);
        });
    }
}
