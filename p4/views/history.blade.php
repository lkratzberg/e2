@extends('templates.master')

@section('title')
    Rock Paper Scissors
@endsection

@section('content')

@if($app->old('gameNotFound'))
<div class='alert alert-warning'>
  Sorry, the game you are looking for is not found.
</div>
@endif

<h2>Round History</h2>
<ul class="instructions">
@foreach($games as $game)
  <li><a href='/round-details?id={{ $game['id'] }}'>Game # {{ $game['id'] }}</li></a>
@endforeach
</ul>

@endsection
