<?php

namespace Database\Seeders;

use App\Gateway\PokemonGateway;
use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    private PokemonGateway $getGenerateDataPokemon;

    public function __construct()
    {
        $this->getGenerateDataPokemon = new PokemonGateway;
    }

    public function register():void
    {

    }

    public function run():void
    {
        $url = "https://pokeapi.co/api/v2/ability";
        $dataPokemons = $this->getGenerateDataPokemon->generateData($url);
        $characters= $dataPokemons["results"];

        foreach ($characters as $character) {
            Character::create([
                'name' => $character["name"],
                'url' => $character["url"]
            ]);
        }
    }
}
