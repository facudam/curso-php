<?php 
$age = 18;
$outputAge = match ($age) {
    0, 1, 2 => "Sos un bebé",
    3, 4, 5, 6, 7, 8, 9, 10 => "Sos un niño",
    default => "Sos más grande",
};
$otherPhrase = match(true) {
    $age < 3 => "Sos un bebito",
    $age < 12 => "Sos un niño",
    $age < 18 => "Sos un adolescente",
    default => "Sos mayor de edad"
}
?>

<h1><?= $outputAge ?></h1>
<h1><?= $otherPhrase ?></h1>