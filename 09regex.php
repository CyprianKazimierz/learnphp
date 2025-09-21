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
            <label for="" >Escriu un paraula nomes amb lletres</label>
            <input type="text" name="escriuparaula" require> <!--*name es el nom de variable per el server-->
        </p>
        <p>
            <label for="" >Escriu un paraula nomes amb numeros</label>
            <input type="number" name="escriuNumero" > <!--*name es el nom de variable per el server-->
        </p>
        <p>
            <label for="" >Escriu un correu electronic</label>
            <input type="email" name="escriuCorreu" > <!--*name es el nom de variable per el server-->
        </p>
        <p>
            <label for="" >Escriu una contrasenya</label>
            <input type="pasword" name="escriuContrasenya" > <!--*name es el nom de variable per el server-->
        </p>
        <input type="submit" value="Enviar">
    </form>
    <?php
        /*if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['escriuNumero'])){
            $num = $_POST['escriuNumero'];
            $numsec = 0;
            $result = $numsec == $num ? "SI" : "NO";
            echo 'son iguals els numeros?: '.$result;
        };*/

        if ($_SERVER['REQUEST_METHOD']=='POST'
         && isset($_POST['escriuNumero'])
         && isset($_POST['escriuparaula'])
         && isset($_POST['escriuCorreu'])
         && isset($_POST['escriuContrasenya'])){
            if(preg_match("/^[A-Aa-z]{1,8}$/",$_POST['escriuparaula'])){
                echo "molt be les lletres";
            }else{
                echo "no funca les lletres";
            }
            echo "<br>";
            if(preg_match("/^[0-9]{1,}$/",$_POST['escriuNumero'])){
                echo "funca numeros";
            }else{
                echo "no funca numeros";
            }
            echo "<br>";
            if (filter_var($_POST['escriuCorreu'],FILTER_VALIDATE_EMAIL)){
                echo "funca email";
            }else {
                echo "no funca email";
            }
            echo "<br>";
            if(preg_match("/^[a-zA-Z]{1,}$/",$_POST['escriuContrasenya'])){
                echo "funca numeros";
            }else{
                echo "no funca numeros";
            }
            echo "<br>";
        }
    ?>
</body>
</html>