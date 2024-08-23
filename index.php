<?php 
$asignaturas = $_POST['asignatura'];
$frutas = $_POST['frutas'];
foreach($asignaturas as $materia) {
    echo $materia . "<br>";
}
foreach($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
<h1><?= $_POST['nombre']  ?></h1> <!--Asi obtenemos los valores -->


