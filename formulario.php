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
        <select id="asignatura" name="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematica">Matemática</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="frutas">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas">
            Manzana
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>