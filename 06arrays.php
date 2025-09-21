<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        $fruites = ['apple','orange','banana'];
        $fru = array('apple','orange','banana');
        $a = [
            ['hola'],
            ['adeu']
        ];
        echo "<pre>";
        print_r($fru);
        echo "</pre>";

        var_dump($a);
        echo "<br>";
        foreach($fru  as $fruita){
            echo "<li>$fruita</li>";
        }
?>
</body>
</html>