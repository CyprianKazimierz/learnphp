<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>El meu primer form</h1>
    <form method="post">
        <p>
            <label for="" >Escriu un numero</label>
            <input type="text" name="escriuNumero"> <!--*name es el nom de variable per el server-->
        </p>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['escriuNumero'])){
            $num = $_POST['escriuNumero'];
            $numsec = 0;
            $result = $numsec == $num ? "SI" : "NO";
            echo 'son iguals els numeros?: '.$result;
        };
    ?>
</body>
</html>