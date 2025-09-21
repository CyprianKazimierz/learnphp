<?php

$myArray = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

//Ascending Name
asort($myArray);
echo "<html><body>";
echo "<h1> Order Ascending Names </h1>";
foreach($myArray as $person => $name){
    echo "<p> $person : $name </p>";
}

//Ascending numbers
ksort($myArray);
echo "<h1> Ascending Key </h1>";
foreach($myArray as $person => $name){
    echo "<p> $person : $name </p>";
}

//Descending numbers
krsort($myArray);
echo "<h1> Descending Key </h1>";
foreach($myArray as $person => $name){
    echo "<p> $person : $name </p>";
}

//Descending Names
arsort($myArray);
echo "<h1> Descending names </h1>";
foreach($myArray as $person => $name){
    echo "<p> $person : $name </p>";
}

echo "</body></html>";
?>
