<?php
 $resultCalc = "";
    function calc($operation,$numberOne,$numberTwo){
        $result = 0;
        switch($operation){
            case "+":
                $result = $numberOne + $numberTwo;
                break;
            case "-":
                $result = $numberOne - $numberTwo;
                break;
            case "*":
                $result = $numberOne * $numberTwo;
                break;
            case "/":
                $result = $numberOne / $numberTwo;
                break;
            case "%":
                $result = $numberOne % $numberTwo;
                break;
        }
        return $result;
    }
   

    if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET['numberOne']) && isset($_GET['numberTwo'])){
        if(preg_match("/^[0-9]+$/",$_GET['numberOne']) && preg_match("/^[0-9]+$/",$_GET['numberTwo'])) {
            $resultCalc = calc($_GET['operation'],$_GET['numberOne'],$_GET['numberTwo']);
        }else {
            echo "<script> alert('Only numbers, and no blank option'); </script>";
        }
    }
    
?>