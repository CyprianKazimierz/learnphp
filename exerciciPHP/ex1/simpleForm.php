<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Simple Form</h1>
    <form action="" method="post">
        <label for="">Introduce your Name:</label>
        <input type="text" name="yourName">
        <input type="submit" value="Submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['yourName'])){
            $yourName = $_POST['yourName'];
            echo "Your name is $yourName !!";
        }
    ?>
</body>
</html>