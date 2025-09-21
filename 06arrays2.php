<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays associatius</h1>
    <?php
        $capitals = [
            'Francia' => 'Paris',
            'Espanya' => 'Barcelona',
            'Polonia' => 'Varsovia'
        ];

        $capitals['Alemanya']='Berlin';
        
        array_push($capitals,'Andora'); #no fero en arrays associatius

        echo "<pre>";
        print_r($capitals);
        echo "</pre>";
        
        $exists = in_array('Francia',$capitals)? 'Hi es' : "no i es";
        echo $exists;

        foreach($capitals as $pais => $cap){
            echo "<br>";
            echo "la capital de ".$pais." es ".$cap;
        };
    ?>
</body>
</html>