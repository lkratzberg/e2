@extends('templates.master')

@section('title')
    Game # {{ $game['id'] }}
@endsection

@section('content')

<h2>Game # {{ $game['id'] }}</h2>
<ul class="instructions">
  <li>Computer Play: {{ $game['player_1_throw'] }}</li>
  <li>User's Play: {{ $game['player_2_throw'] }}</li>
  <li>Winner: {{ $game['winner'] }}</li>
</ul>

<a href='/round-history'>&larr; Return to all games</a>

@endsection
