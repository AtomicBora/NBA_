@extends('layouts.app')

@section('title', $team->name)


@section('content')
    
    <h2>{{$team->name}}</h2>
    <h4>List of all players:</h4>
    @foreach ($team->players as $player)
        <a href="{{route('PlayerInfo', ['player' => $player->id])}}">
            <li>{{$player->first_name}} {{$player->last_name}}</li>
        </a>
    @endforeach
@endsection