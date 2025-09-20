<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date manipulating</title>
</head>
<body>
    <?php
    $now = new DateTime('now', new DateTimeZone('Europe/Madrid'));
    $year = $now -> format('Y');
    $dateInLetters = $now -> format('l jS \of F Y H:i:s ');

     $secondDate = new DateTime('2026-01-01');
            $diff = $now->diff($secondDate);
            $daysLeft = $diff->format('%a');

    echo "Actual Year: $year";
    echo "<br>";
    echo "Current date: $dateInLetters";
    echo "<br>";
    echo  $daysLeft." days left.";
    ?>
</body>
</html>