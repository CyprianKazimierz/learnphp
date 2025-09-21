<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up Form</title>
    <style>
        .main{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Sing Up</h1>
        <form method="post">
            <label for="">Username:</label>
            <input type="text" name="username">
            <br>
            <br>
            <label for="">Password:</label>
            <input type="password" name="password">
            <br>
            <br>
            <input type="submit">
        </form>
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['username']) && isset($_POST['password'])){
            if(preg_match('/^[a-z0-9]{8}$/',$_POST['username'])){
                echo "User correct";
            }else{
                echo "User error";
            }
            echo "<br>";
            if(preg_match('/^[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};:\'"\\|,.<>\/?]{8}$/',$_POST['password'])){
                echo "password correct";
            }else{
                echo "password incorrect";
            }

        }
    ?>
</body>
</html>