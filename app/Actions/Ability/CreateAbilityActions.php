<?php

namespace App\Actions\Abilitie;

use App\Models\Ability;

class CreateAbilitieActions
{
    public static function execute(array $data): Ability
    {
        return Ability::create([
            'character_id' => $data['character_id'],
            'is_main_series' =>  $data['is_main_series'],
            'effect_changes' =>  $data['effect_changes']
        ]);
    }
}
