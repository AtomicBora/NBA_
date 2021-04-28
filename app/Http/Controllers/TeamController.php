<?php

namespace App\Http\Controllers;


use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {

        $teams = Team::all(); //$team = DB::table('teams)->pluck('name', 'TeamName') i onda u bladeu za foreach($names as $TeamName => $name) echo $name;
        return view('teams.index', compact('teams'));

    }

    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }
}
