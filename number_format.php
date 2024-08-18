<?php 
$cantidad = 1232.45;
$cantidad2 = 1545.50;

$price = number_format($cantidad,2); // output: 1,232.45
$price2 = number_format($cantidad2, 2, ",", "."); // output: 1.545,50
echo $price . "<br>";
echo $price2;

?>