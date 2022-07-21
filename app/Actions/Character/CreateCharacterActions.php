<?php

namespace App\Actions\Character;

use App\Models\Character;

class CreateCharacterActions
{
    public static function execute(array $data): Character
    {
        return Character::create([
            'name' => $data['name'],
            'url' =>  $data['url']
        ]);
    }
}
