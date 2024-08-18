<?php 
$totalLetras = strlen("Hola amigo mio");

if ($totalLetras < 100) {
    echo "El mensaje fue enviado" . "<br>";
} else {
    echo "No se pudo enviar" . "<br>";
}

$edad = 25;

if ($edad > 21) {
    echo "Es mayor que 21 años" . "<br>";
} else if ($edad == 21) {
    echo "Tenes 21 años" . "<br>";
} else {
    echo "Sos menor de 21" . "<br>";
}

$nota = 4;
echo(($nota >= 4) ? "Aprobaste" . "<br>" : "Desaprobaste" . "<br>");

$colorFavorito = "verde";

switch ($colorFavorito) {
    case "verde":
        echo "Alto color";
        break;
    case "rojo":
        echo "como una manzana";
        break;
    case "azul":
        echo "anda a dormir";
        break;
    default :
        echo "cualquiera amigo";
}
?>