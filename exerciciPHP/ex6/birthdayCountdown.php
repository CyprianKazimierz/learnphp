<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Countdawn</title>
</head>
<body>
     <?php
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['birthday'])){
            $birthday = new DateTime($_POST['birthday']);
            $now = new DateTime();
            
            $birthdayThisYear = new DateTime($now->format("Y")."-".$birthday->format("m-d"));
            
            if($birthdayThisYear < $now){
                $birthdayThisYear->modify('+1 year');
            }

            $diff = $now -> diff($birthdayThisYear);

              
        }
    ?>
    <h1>Birthday Countdawn</h1>
    <form action="" method="post">
        <label for="">put your birthday:</label>
        <input type="date" name="birthday">
        <input type="submit"value="submit">
    </form>
    <?php if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['birthday'])){
     echo "Queden ".$diff->days." dies per el teu cumple";}  ?>
   
</body>
</html>