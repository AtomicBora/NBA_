<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show(Player $player, Team $team)
    {
        return view('players.show', compact('player', 'team'));
    }
}
