<?php

# Explicación: https://youtu.be/T4kFK9M3XYY?list=PLH_tVOsiVGzmnl7ImSmhIw5qb9Sy5KJRE

/*

$_FILES["archivo"]["name"]; # Nombre del archivo
$_FILES["archivo"]["tmp_name"]; # Ruta temporal
$_FILES["archivo"]["type"]; # Tipo (MIME Type)
$_FILES["archivo"]["error"]; # Indica si la carga se realizó correctamente
$_FILES["archivo"]["size"]; # Tamaño

*/

if(mime_content_type($_FILES["archivo"]["tmp_name"]) != "image/jpeg" && mime_content_type($_FILES["archivo"]["tmp_name"]) != "image/png") {
    echo "La extesión del archivo no es válida.";
    exit();
}

if(($_FILES["archivo"]["size"] / 1024) >= 3072) { # Limitar el peso a 3 mb
    echo "El peso del archivo no puede superar los 3MB";
    exit();
}

if(!file_exists("archivos")) {
    # mkdir -> crear carpeta
    if(!mkdir("archivos", 0777)) { # mkdir(nombre, permisos); 0777 = máximos permisos posibles
        echo "Error al crear la carpeta \"archivos\".";
        exit(); # Fuerza el corte de la ejecución del programa (igual que die())
    }
}

chmod("archivos", 0777); # Modificar los permisos de archivos/carpetas

if(move_uploaded_file($_FILES["archivo"]["tmp_name"], "archivos/" . $_FILES["archivo"]["name"])) {
    echo "Archivo subido correctamente.";
}
else {
    echo "Error al subir el archivo.";
}

?>