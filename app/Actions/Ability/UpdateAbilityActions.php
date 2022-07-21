<?php

namespace App\Actions\Character;

use App\Models\Character;

class UpdateCharacterActions
{
    public static function execute(array $data): Character
    {

        $record = Character::find($data['id']);

        $record->update([
            'name' =>  $data['name'],
            'url' =>  $data['url']
        ]);

        return $record;
    }
}
