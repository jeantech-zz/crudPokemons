<?php

namespace App\Http\Controllers\Player;

use App\Actions\Player\CreatePlayerActions;
use App\Actions\Player\DeletePlayerActions;
use App\Actions\Player\UpdatePlayerActions;
use App\Models\Player;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlayerRequest;
use App\Http\Requests\PlayerUpdateRequest;
use App\Repositories\Character\ColeccionsCharacterRepositories;
use App\Repositories\Player\ColeccionsPlayerRepositories;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class PlayerController
 * @package App\Http\Controllers
 */
class PlayerController extends Controller
{
    private ColeccionsPlayerRepositories $coleccionsPlayer;
    private ColeccionsCharacterRepositories $coleccionsCharacter;

    public function __construct()
    {
        $this->coleccionsPlayer = new ColeccionsPlayerRepositories;
        $this->coleccionsCharacter = new ColeccionsCharacterRepositories;
    }

    public function index()
    {
        $players =  $this->coleccionsPlayer->listPlayerCharacterDetail();

        return view('player.index', compact('players'))
            ->with('i', (request()->input('page', 1) - 1) * $players->perPage());
    }

    public function create()
    {
        $player = new Player();
        $characters = $this->coleccionsCharacter->listCharacter();
        return view('player.create', compact('player','characters' ));
    }

    public function store(PlayerRequest $request)
    {

        CreatePlayerActions::execute($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Player created successfully.');
    }

    public function show($id)
    {
       $player = $this->coleccionsPlayer->playerId($id);

        return view('player.show', compact('player'));
    }

    public function edit($id)
    {
        $player = $this->coleccionsPlayer->playerId($id);
        $characters = $this->coleccionsCharacter->listCharacter();

        return view('player.edit', compact('player','characters'));
    }

    public function update(PlayerUpdateRequest $request, Player $player)
    {
        UpdatePlayerActions::execute($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Player updated successfully');
    }

    public function destroy($id):RedirectResponse
    {
        DeletePlayerActions::execute($id);

        return redirect()->route('players.index')
            ->with('success', 'Player deleted successfully');
    }

}
