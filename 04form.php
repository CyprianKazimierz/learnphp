<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>El meu primer form</h1>
    <form method="get">
        <p>
            <label for="" >Escriu un numero</label>
            <input type="text" name="escriuNumero"> /*name es el nom de variable per el server*/
        </p>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['escriuNumero'])){
            $num = $_GET['escriuNumero'];
            echo 'numero enviat: '.$num;  
        };
    ?>
</body>
</html>