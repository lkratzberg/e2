<?php require 'index-controller.php' ?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Rock Paper Scissors</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <img alt='Rock Paper Scissors Picture' src = '/images/headerpic.png'
    style='width:500px;'>

  <h1>Welcome to Rock Paper Scissors!</h1>
  <h2>Instructions</h2>
  <ul>
      <li>This is a two-player game where each player chooses one of the three options to "throw".
      <li>Scissors beats Paper, Paper beats Rock, Rock beats Scissors
      <li>If both players throw the same option, it is a tie.
  </ul>

  <form method='GET' action='process.php'>

  <h2>Let's Play!</h2>
    <p>
      Select one of the options for your turn:
      <div>
        <div class="tab">
          <input type='radio' value='rock' id='rock' name='playerOption'>
          <label for='rock'>Rock</label>
        </div>
      </div>
      <div>
        <div class="tab">
          <input type='radio' value='paper' id='paper' name='playerOption'>
          <label for='paper'>Paper</label>
        </div>
      </div>
      <div>
        <div class="tab">
          <input type='radio' value='scissors' id='scissors' name='playerOption'>
          <label for='scissors'>Scissors</label>
        </div>
      </div>
    </p>

    <button type='submit'>Throw!</button>
  </form>

<?php if($showResults) { ?>
<ul>
    <li>You threw <?php echo $results['playerOption'] ?></li>
    <li>The computer threw <?php echo $results['computer'] ?></li>
    <li><?php echo $results['winner'] ?></li>
  <?php } ?>
</ul>

</body>
</html>
