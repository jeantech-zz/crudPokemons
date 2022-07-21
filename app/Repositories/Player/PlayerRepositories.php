<?php

namespace App\Repositories\Player;

interface PlayerRepositories
{
    public function listPlayerCharacterDetail();

    public function playerId(int $id);

}
