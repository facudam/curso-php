<?php 
$numero = 4; // Arroja un warning y marca la variable como undefined.

// unset($numero); // Con unset eliminamos la variable

if(is_null($numero)) {
    echo 'Es nula';
} else {
    echo 'No es nula';
}

$var = $_GET['var']; // Obtenemos el valor de $var a través del método GET.
if(empty($var)) {// Empty da true si es: "", "0", 0, 0.0, null, false, array()
    echo 'Está vacía' . "<br>";
} else {
    echo 'No está vacía' . "<br>";
}

$variable = $_GET['variable']; // Obtenemos el valor de $var a través del método GET.
if(isset($variable)) {// Isset da true si está definida y no es null.
    echo 'Está definida';
} else {
    echo 'No está definida';
}