<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DECODE JSON FILE</title>
    <style>
        .menu{
            border-radius: 10px;
            background-color:darkgrey;
            margin:1%;
            padding:1%;
        }
    </style>
</head>
<body>
    <h1>DECODE JSON FILE</h1>
    <?php

    $json = '{
        "Italian Menu": {
            "first_plate": "Bruschetta",
            "second_plate": "Lasagna",
            "dessert": "Tiramisu"
        },
        "French Menu": {
            "first_plate": "French Onion Soup",
            "second_plate": "Coq au Vin",
            "dessert": "Crème Brûlée"
        },
        "Japanese Menu": {
            "first_plate": "Miso Soup",
            "second_plate": "Sushi",
            "dessert": "Mochi"
        },
        "Mexican Menu": {
            "first_plate": "Guacamole",
            "second_plate": "Tacos al Pastor",
            "dessert": "Churros"
        },
        "Indian Menu": {
            "first_plate": "Samosa",
            "second_plate": "Butter Chicken",
            "dessert": "Gulab Jamun"
        }
    }';
    $decode = json_decode($json,true);
    
    foreach($decode as $menu => $plates){
        echo "<div class='menu'>";
        echo "<h2> $menu </h2>";
        echo "<p>First plate: $plates[first_plate]</p>";
        echo "<p>Second plate: $plates[second_plate]</p>";
        echo "<p>Dessert: $plates[dessert]</p>";
        echo "</div>";
    }
    ?>
</body>
</html>