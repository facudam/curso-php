<?php 
$clave = "Contraseña1234";
echo md5($clave) . "<br>"; // Utilizado antes - Ahora es vulnerable.
echo sha1($clave) . "<br>"; // Utilizado antes - Ahora es vulnerable.
echo hash("md5", $clave). "<br>"; // Con esta podemos utilizar distintos tipos de hasheos.

// Documentación: https://www.php.net/manual/es/function.password-hash.php
echo "Con password_hash: " . password_hash($clave, PASSWORD_DEFAULT) . "<br>"; // Con ésta la clave cambiará constantemente al volver a ejecutarse.
$claveEncriptada = password_hash($clave, PASSWORD_DEFAULT);
echo password_verify($clave, $claveEncriptada); // Devuelve 1 si las claves coinciden.
?>