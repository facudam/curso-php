<?php 
$arreglo1 = array("elemento1", 25, true, 1.2);
echo $arreglo1[0];
$arreglo2 = [1,2,"facundo",true];
echo $arreglo2[3];
$persona = array(
    "nombre" => "Facundo",
    "apellido" => "Cáceres",
    "estado civil" => "casado",
);

// Agregamos una clave valor:
$persona['oficio'] = 'programador';

echo '<br>' . $persona['nombre'] . ' ' . $persona['apellido'] . ' es un gran ' . $persona['oficio'];
?>