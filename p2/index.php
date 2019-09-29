<?php require 'index-controller.php' ?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Rock Paper Scissors</title>
    <meta charset='utf-8'>

</head>
<body>
  <img alt='Rock Paper Scissors Picture' src = '/images/headerpic.png'
    style='width:500px;'>
  <h1>Welcome to Rock Paper Scissors!</h1>
  <h5>This is a two-player game where each player chooses one of the three options to "throw".
  <br>Scissors beats Paper, Paper beats Rock, Rock beats Scissors
  <br>If both players throw the same option, it is a tie.</h5>
    <p>
      <br>
      <br>Player 1 Throw: <?php echo $player1Throw; ?>
      <br>Player 2 Throw: <?php echo $player2Throw; ?>
      <br>
      <br> <?php echo $roundResult; ?>
      <br>
      </p>

</body>
</html>
