<?php

namespace App\Repositorie\Players;

interface PlayerRepositories
{
    public function listPlayerCharacterDetail();

    public function playerId(int $id);

}
