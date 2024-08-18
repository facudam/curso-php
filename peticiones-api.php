<?php 
const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializamos una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
# Indicamos que queremos recibir el resultado de la petición y no mostrarla en pantalla:
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Ejecutamos la petición y guardamos el resultado:
$result = curl_exec($ch);
# Transformamos el json del resultado y lo transforme en un array asociativo para poder manejar mejor la información.
$data = json_decode($result, true);

# Cerramos nuestro curl:
curl_close($ch);

var_dump($data);
?>
<h1><?= $data["following_production"]["title"] ?></h1>
<img src=<?= $data["following_production"]["poster_url"]?> alt="image" width="250px">
<p><?= $data["following_production"]["overview"] ?></p>