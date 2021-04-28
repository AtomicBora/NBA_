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

    <h5>Comments</h5>
    <ul>
      @forelse($team->comments as $comment)
        <li>{{$comment->content}}</li>
      @empty
        <span>No comments</span>
      @endforelse
    </ul>

    <form action="/teams/{{$team->id}}/comments" method="POST">
        @csrf
        {{-- <input type="hidden" name="post_id" value="{{$post->id}}" /> --}}
        <div class="form-group">
          <label for="content">Add comment:</label>
          <textarea
            class="form-control @error('content') is-invalid @enderror"
            id="content"
            rows="2"
            name="content"
          ></textarea>
          @error('content')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection