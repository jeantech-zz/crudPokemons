<?php

namespace App\Actions\Character;

use App\Models\Character;

class DeleteCharacterActions
{
    public static function execute(int $id): Character
    {
        return Character::find($id)->delete();
    }
}
