<?php

namespace FPP\BigGreenButton;

use Illuminate\Support\ServiceProvider;

class BigGreenButtonProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->publishes([
            __DIR__.'../public/css/styles.css' => public_path('/css/bgb-styles.css'),
        ]);

    }
}