<?php 
    //setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly)
    // time()+60*60*24*30: La hora actual + 60 segundos * 60 minutos * 24 horas * 30 días. Osea, expira en 30 dias
    setcookie("Idioma", "es", time()+60*60*24*30, "/", "localhost", true, true); // "/" indica que la cookie está disponible en todos los archivos del servidor.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Obtenemos el valor de la cookie -->
    <h1><?= $_COOKIE['Idioma']; ?></h1> 
</body>
</html>