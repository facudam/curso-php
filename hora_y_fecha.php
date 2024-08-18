<?php
/* 
    Documentación:
    zona horaria: https://www.php.net/manual/es/function.date-default-timezone-set.php
    date: https://www.php.net/manual/es/function.date.php
*/

date_default_timezone_set("America/Argentina/Buenos_Aires");
// Fecha:
echo date("d") . "<br>"; // muestra en numero de dias del mes. Output: 28
echo date("D") . "<br>"; // muestra parte del dia se la semana en inglés. Output: Sun
echo date("l") . "<br>"; // muestra el dia se la semana en inglés completo.
echo date("d-m-y") . "<br>"; // Output: 18-08-24
// Hora:
echo date("g:i a") . "<br>"; // Output: 12:56 pm
?>