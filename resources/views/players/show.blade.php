@extends('layouts.app')

@section('title', "Player")


@section('content')
            
    <h1>{{$player->first_name}}</h1>
    <h3>{{$player->last_name}}</h3>
    <h3>{{$player->email}}</h3>
    <a href="{{ route('TeamAndPlayers', ['team' => $player->team->id]) }}">
        <h3>{{ $player->team->name }}</h3>
    </a>
    

@endsection