<?php
// URL de la API
$url = "https://pokeapi.co/api/v2/pokemon/ditto";

// Realizar la solicitud
$response = file_get_contents($url);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Mostrar la información del Pokémon
echo "Nombre: " . $data['name'] . "\n";
echo "Altura: " . $data['height'] . "\n";
echo "Peso: " . $data['weight'] . "\n";
?>
