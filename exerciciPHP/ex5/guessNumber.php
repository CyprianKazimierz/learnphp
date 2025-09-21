<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Number</title>
</head>
<body>
    <?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
        //the first time we do a submit we get the number ti guess and the attempts and the numberguess
        $numberToGuess = $_POST['numberToGuess'];
        $attempts = $_POST['attempts']+1;
        $numberPlayer = $_POST['numberPlayer'];

        //next we compare if it is or no, if its not we add 1 attempt, else you win and we restart the game
        if ($numberPlayer > $numberToGuess) {
            echo "bigger than the number to guess";
        } elseif ($numberPlayer < $numberToGuess) {
            echo "lower than the number to guess";
        } else {
            echo "You win!!!<br>";
            echo "Number of attempts: $attempts";
            
            $numberToGuess = rand(1, 100);
            $attempts = 0;
        }
} else {
    //if is not method post we have a random number and a attempts in 0 and next we save it in te inputs hidden 
    $numberToGuess = rand(1, 100);
    $attempts = 0;
}
?>

<form action="" method="POST">
    <h1>Guess Number</h1>
    <label for="">Type a number and try to guess: </label>
    <input type="number" name="numberPlayer" value="">
    <input type="number" name="attempts" value="<?php echo $attempts ?>" hidden>
    <input type="number" name="numberToGuess" value="<?php echo $numberToGuess ?>" hidden>  
    <input type="submit" value="check">
      <?php echo "$attempts $numberToGuess"?>
</form>
    
</body>
</html>