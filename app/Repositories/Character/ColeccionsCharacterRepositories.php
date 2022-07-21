<?php

namespace App\Repositories\Character;

use App\Models\Character;
use Illuminate\Database\Eloquent\Collection;

class ColeccionsCharacterRepositories implements CharacterRepositories
{
    public function listCharacter():Collection
    {
        return Character::get();

    }

}
