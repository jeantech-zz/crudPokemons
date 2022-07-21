<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register():void
    {
    }


    public function boot():void
    {
        $this->app->bind(GatewayContract::class, PokemonGateway::class);
    }
}
