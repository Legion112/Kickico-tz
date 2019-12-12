<?php

namespace Legion112\Kickico;

use Illuminate\Contracts\Foundation\Application;
use Legion112\Kickico\Services\Client;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        // TODO need to test
        $this->app->bind(Client::class, function (Application $app) {
            return new Client($app->make(\GuzzleHttp\Client::class, [
                'config' => [
                    'base_uri' => config('legion112-kickico.base_uri')
                ]
            ]));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/legion112-kickico.php' => config_path('legion112-kickico.php'),
        ]);
    }
}