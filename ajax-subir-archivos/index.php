<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Subir archivos con PHP</h3>
    <form action="carga.php" method="POST" enctype="multipart/form-data" class="FormularioAjax">
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg, .svg"/>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <script src="ajax.js"></script>
</body>
</html>