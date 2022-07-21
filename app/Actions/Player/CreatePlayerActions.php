<?php

namespace App\Actions\Player;

use App\Models\Player;

class CreatePlayerActions
{
    public static function execute(array $data): Player
    {
        return Player::create([
            'name' => $data['name'],
            'character_id' =>  $data['character_id']
        ]);
    }
}
