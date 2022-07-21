<?php

namespace App\Actions\Player;

use App\Models\Player;

class DeletePlayerActions
{
    public static function execute(int $id): Player
    {
        return Player::find($id)->delete();
    }
}
