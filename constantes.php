<?php
    // Por convención se escriben en mayúscula.
    define('PULGADA', 0.393701);
    define('LIBRA', 2.20462);
    define("TITULOSMUNDIALES", array(78, 86, 22));
    $cm = 50;
    $kilo = 5;
    echo $cm * PULGADA . '<br>';
    echo $kilo * LIBRA . '<br>';
    foreach(TITULOSMUNDIALES as $copa) {
        echo $copa . " ";
    }

?>
