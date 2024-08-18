<?php 
$lenguajesDeProgramacion = ["JavaScript", "PHP", "TypeScript", "Java", "Python"];

?>
<ul>
    <?php foreach($lenguajesDeProgramacion as $key => $language) : ?>
        <li><?= $key . "-" . $language ?></li>
    <?php endforeach; ?>
</ul>