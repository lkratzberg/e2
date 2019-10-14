<?php

session_start();

//declare variables
$moves = ['rock', 'paper', 'scissors'];
$roundResult = null;

//player1 is computer, player2 is user selecting option
$player1Throw = $moves[rand(0, 2)];
$player2Throw = $_GET['playerOption'];

if($player1Throw == $player2Throw)
{
  $roundResult = "Throw is a tie";
}
else if( ($player1Throw == 'rock' && $player2Throw == 'scissors') ||
        ($player1Throw == 'paper' && $player2Throw == 'rock' ) ||
        ($player1Throw == 'scissors' && $player2Throw == 'paper') )
{
  $roundResult = "Computer Wins!";
}
else if( ($player2Throw == 'rock' && $player1Throw == 'scissors') ||
        ($player2Throw == 'paper' && $player1Throw == 'rock') ||
        ($player2Throw == 'scissors' && $player1Throw == 'paper') )
{
  $roundResult = "You Win!";
}
else
{
  $roundResult = "Error"; //check to make sure the if-statement works
}

$results = [
  'winner' => $roundResult,
  'computer' => $player1Throw,
  'playerOption' => $player2Throw
];

$_SESSION['results'] = $results;

header('Location: index.php');
