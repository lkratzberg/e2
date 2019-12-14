<?php
namespace App\Controllers;

class GameController extends AppController
{
  public function __construct($app)
  {
    parent::__construct($app);
  }

  public function index()
  {
    $message = $this->app->old('message', null);

    return $this->app->view('index',[
      'message' => $message
    ]);
  }

  public function playRound()
  {
    $this->app->validate([
      'playerOption' => 'required'
    ]);

    //declare variables
    $moves = ['rock', 'paper', 'scissors'];
    $roundResult = null;

    //player1 is computer, player2 is user selecting option
    $player1Throw = $moves[rand(0, 2)];

    #Extract data from the form submission
    $id = $this->app->input('id');
    $player2Throw = $this->app->input('playerOption');

    if($player1Throw == $player2Throw)
    {
      $roundResult = 'Tie';
    }
    else if( ($player1Throw == 'rock' && $player2Throw == 'scissors') ||
            ($player1Throw == 'paper' && $player2Throw == 'rock' ) ||
            ($player1Throw == 'scissors' && $player2Throw == 'paper') )
    {
      $roundResult = 'Computer';
    }
    else if( ($player2Throw == 'rock' && $player1Throw == 'scissors') ||
            ($player2Throw == 'paper' && $player1Throw == 'rock') ||
            ($player2Throw == 'scissors' && $player1Throw == 'paper') )
    {
      $roundResult = 'User';
    }
    else
    {
      $roundResult = "Error"; //check to make sure the if-statement works
    }

    $data = [
      'player_1_throw' => $player1Throw,
      'player_2_throw' => $player2Throw,
      'winner' => $roundResult,
    ];
    $this->app->db()->insert('throws',$data);

    if($roundResult == 'Tie')
      $message = "The computer threw a " . $player1Throw . " and you threw a " . $player2Throw . ", so it's a tie!";
    elseif ($roundResult == 'Computer')
      $message = "The computer threw a " . $player1Throw . " and you threw a " . $player2Throw . ", you lose :(";
    elseif ($roundResult == 'User')
      $message = "The computer threw a " . $player1Throw . " and you threw a " . $player2Throw . ", you win!!!";

    $this->app->redirect('/', ['message' => $message]);
  }//end playRound function

  public function showHistory()
  {
    $games = $this->app->db()->all('throws');
    return $this->app->view('history', ['games' => $games]);
  }

  public function showDetails()
  {
    $gameID = $this->app->param('id');
    $game = $this->app->db()->findByID('throws', $gameID);

    if(is_null($game))
    {
      return $this->app->redirect('/round-history', ['gameNotFound' => true]);
    }
    return $this->app->view('details', ['game' => $game]);
  }

}//end class
