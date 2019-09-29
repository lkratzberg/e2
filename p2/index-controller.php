<?php

//declare variables
$moves = ['rock', 'paper', 'scissors'];
$player1Throw;
$Player2Throw;

//each player randomly throws one of the options
$player1Throw = $moves[rand(0, 2)];
$player2Throw = $moves[rand(0, 2)];

if($player1Throw == $player2Throw)
{
  $roundResult = "Throw is a tie";
}
else if( ($player1Throw == $moves[0] && $player2Throw == $moves[2]) ||
        ($player1Throw == $moves[1] && $player2Throw == $moves[0] ) ||
        ($player1Throw == $moves[2] && $player2Throw == $moves[1]) )
{
  $roundResult = "Player 1 Wins!";
}
else if( ($player2Throw == $moves[0] && $player1Throw == $moves[2]) ||
        ($player2Throw == $moves[1] && $player1Throw == $moves[0]) ||
        ($player2Throw == $moves[2] && $player1Throw == $moves[1]) )
{
  $roundResult = "Player 2 Wins!";
}
else
{
  $roundResult = "Error"; //check to make sure the if-statement works
}
