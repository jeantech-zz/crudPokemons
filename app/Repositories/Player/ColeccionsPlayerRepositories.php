<?php

namespace App\Repositories\Player;

use App\Models\Player;

class ColeccionsPlayerRepositories implements PlayerRepositories
{
    public function listPlayerCharacterDetail()
    {
        return Player::select('players.*', 'characters.name as characters_name')
        ->join('characters', 'players.character_id', '=', 'characters.id')
        ->paginate();

    }

    public function playerId(int $id)
    {
        return Player::select('players.*', 'characters.name as characters_name')
        ->join('characters', 'players.character_id', '=', 'characters.id')
        ->Where('players.id', 'LIKE', $id)
        ->first();

    }

}
