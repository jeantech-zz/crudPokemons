<?php

namespace App\Http\Controllers\Player;

use App\Models\Player;
use App\Http\Controllers\Controller;
use App\Repositories\Player\ColeccionsPlayerRepositories;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class PlayerController
 * @package App\Http\Controllers
 */
class PlayerController extends Controller
{
    private ColeccionsPlayerRepositories $coleccionsPlayer;

    public function __construct()
    {
        $this->coleccionsPlayer = new ColeccionsPlayerRepositories;
    }

    public function index()
    {
        $players =  $this->coleccionsPlayer->listPlayerCharacterDetail();

        return view('player.index', compact('players'))
            ->with('i', (request()->input('page', 1) - 1) * $players->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $player = new Player();
        return view('player.create', compact('player'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Player::$rules);

        $player = Player::create($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Player created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $player = $this->coleccionsPlayer->playerId($id);

        return view('player.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);

        return view('player.edit', compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Player $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        request()->validate(Player::$rules);

        $player->update($request->all());

        return redirect()->route('players.index')
            ->with('success', 'Player updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $player = Player::find($id)->delete();

        return redirect()->route('players.index')
            ->with('success', 'Player deleted successfully');
    }
}
