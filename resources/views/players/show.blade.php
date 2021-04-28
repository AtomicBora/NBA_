@extends('layouts.app')

@section('title', "Player")


@section('content')
            
    <h1>{{$player->first_name}}</h1>
    <h3>{{$player->last_name}}</h3>
    <h3>{{$player->email}}</h3>
    <a href="">
        <h3>Ne znam kako da ispisem ime tima sa linkom...</h3>
    </a>
    

@endsection