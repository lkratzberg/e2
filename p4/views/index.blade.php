@extends('templates.master')

@section('title')
    Rock Paper Scissors
@endsection

@section('content')

<h2>Instructions</h2>
<ul class="instructions">
  <li>This is a two-player game where each player chooses one of the three options to "throw".
  <li>Scissors beats Paper, Paper beats Rock, Rock beats Scissors
  <li>If both players throw the same option, it is a tie.
</ul>

<div id='play-game'>

  <h2>Let's Play!</h2>

  <form method='POST' id='play-game' action='/play-game/round'>

  <h4>Select one of the options for your turn:</h4>
    <input type='hidden' name='id' value='{{ $throws["id"] }}'>
    <div class="bullets">
      <input type='radio' class='form-control' value='rock' id='rock' name='playerOption'>
      <label for='rock'>Rock</label>
    </div>
    <div class="bullets">
      <input type='radio' class="form-control" value='paper' id='paper' name='playerOption'>
      <label for='paper'>Paper</label>
    </div>
    <div class="bullets">
      <input type='radio' class="form-control" value='scissors' id='scissors' name='playerOption'>
      <label for='scissors'>Scissors</label>
    </div>

  <button type='submit'>Throw!</button>
</form>

@if( $message )
<div class='alert alert-success'>
    {{ $message }}
</div>
@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<a href='/round-history'> View Round History</a>

@endsection
