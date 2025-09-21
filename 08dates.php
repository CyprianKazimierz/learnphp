<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $now = new DateTime('now', new DateTimeZone('Europe/Madrid')); //objecte
    $simple_date = $now->format('Y/m/d H:i');
    echo "Data i hora actual ".$simple_date;
    echo "<br>";
    $date_hour = $now->format('H:i:s');
    echo $date_hour;
    echo "<br>";
    $date_year = $now->format('Y');
    echo $date_year;
    echo "<br>";
    $date_allDays = $now -> format('t');
    echo "aquest mes te ".$date_allDays." dies.";

?>
</body>
</html>