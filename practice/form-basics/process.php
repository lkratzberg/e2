<?php require 'process-controller.php' ?>

<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset='utf-8'>

</head>
<body>

    <?php if($correct) { ?>
       You are correct!
    <?php } else { ?>
       Sorry, you are incorrect :(
    <?php } ?>

    <a href='index.php'>Play again...</a>

</body>
</html>
