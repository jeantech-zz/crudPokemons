<?php

namespace App\Gateway;

interface GatewayContract
{
    public function generateData(string $url);
}
