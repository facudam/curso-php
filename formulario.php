<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php"method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <br>
        <label for="asignatura">Asignatura</label>
        <select id="asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematica">Matemática</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">
            Manzana
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="Naranja" id="opcion-2" name="frutas[]">
            Naranja
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Pera" id="opcion-3" name="frutas[]">
            Pera
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>