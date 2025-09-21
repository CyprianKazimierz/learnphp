<?php
    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['escriuNumero'])){
            $num = $_POST['escriuNumero'];
            $numsec = 0;
            $result = $numsec == $num ? "SI" : "NO";
            echo 'son iguals els numeros?: '.$result;
    };
?>