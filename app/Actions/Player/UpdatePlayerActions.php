<?php

namespace App\Actions\Player;

use App\Models\Player;

class UpdatePlayerActions
{
    public static function execute(array $data): Player
    {

        $record = Player::find($data['id']);

        $record->update([
            'name' =>  $data['name'],
            'character_id' =>  $data['character_id']
        ]);

        return $record;
    }
}
