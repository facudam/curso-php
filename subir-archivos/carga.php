<?php 
// echo $_FILES['fichero']['name']."<br>"; // Obtenemos el nombre del archivo.
// echo $_FILES['fichero']['tmp_name']."<br>"; // El nombre de la carpeta temporal donde se aloja el archivo.
// echo $_FILES['fichero']['type']."<br>"; // El tipo del archivo.
// echo $_FILES['fichero']['error']."<br>"; // Si hubo un error.
// echo $_FILES['fichero']['size']. "<br>"; // El tamaño en bytes.

// Validación de tipo de archivos:
if(mime_content_type($_FILES['fichero']['tmp_name']) != "image/jpeg" && mime_content_type($_FILES['fichero']['tmp_name']) != "image/png") { // Si el tipo de archivo es diferente a jpeg y png no proseguimos con el script.
    echo "El tipo de archivo no admitido";
    exit(); //No ejecutamos el resto del código.
}

// Validamos el tamaño de los archivos:
if ($_FILES['fichero']['size']/1024 > 3072) { // Si el peso del archivo es mayor a 3 mg
    echo "El archivo supera el peso permitido";
    exit();
}

if (!file_exists("archivos")) { // Si no existe la carpeta entra al if
    if(!mkdir("archivos", 0777)) { // Si no puede crear la carpeta entra. 0777 son permisos de escritura y lectura de la carpeta.
        echo "Error al crear el directorio";
        exit(); // Detiene la ejecución del script.
    }
}

chmod("archivos", 0777); // Le damos permisos.

if(move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos/".$_FILES['fichero']['name'])){ //Recibe en nombre de la carpeta donde se aloja temporalemente el archivo y la carpeta con el nombre del archivo donde queremos que se mueva.
    echo "Archivo subido con éxito";
} else {
    echo "No se pudo subir el archivo";
}