<?php

namespace App\Gateway;

use Illuminate\Support\Facades\Http;

class PokemonGateway implements GatewayContract
{
    public function generateData(string $url)
    {
        $response = Http::get($url);
        return json_decode($response->body(), true);
    }
}
