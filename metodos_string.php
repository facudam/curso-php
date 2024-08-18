<?php 
$cadena_texto = "Hola Mundo";
echo strtolower($cadena_texto);
echo strtoupper($cadena_texto);

$otra_cadena = "nueva cadena";
echo ucfirst($otra_cadena); // Sola la primer letra la convierte en mayúscula.
echo ucwords($otra_cadena); // Todas las primeras letras de cada palabra.

echo "<br>" . strlen($otra_cadena); // Cuenta la longitud de la palabra.
echo "<br>" . str_word_count($otra_cadena); // Cuenta las palabras.

$fecha1 = "2021/12/22";
$fecha2 = "2022-09-15";
$numeros = "uno dos tres cuatro cinco seis";

// explode(delimitador, string, limitador)
$array_fecha = explode("/", $fecha1);
echo "<br>" . $array_fecha[1];
$otroArrayFecha = explode("-", $fecha2);
echo "<br>" . $otroArrayFecha[1];
$arrayNums = explode(" ", $numeros, 2); // Con el limitador 2 va a tener sólo 2 de lenght, osea ["uno", "dos tres cuatro cinco seis"].
echo "<br>" . $arrayNums[1];
?>