@extends('layouts.app')

@section('title', 'Teams')

@section('content')
    
        @foreach ($teams as $team)
            <ul>
                <a href="{{route('TeamAndPlayers', ['team' => $team->id])}}">
                    <li>{{ $team->name }}</li>
                </a>
            </ul>
        @endforeach

@endsection
