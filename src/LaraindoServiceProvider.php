<?php

namespace Laraindo;

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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Localization/lang/id' => lang_path('id'),
        ]);
    }
}
