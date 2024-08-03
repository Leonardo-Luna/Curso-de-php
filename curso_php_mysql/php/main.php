<?php

# Conexión a la base de datos
function conexion() {

    $host = getenv("MYSQL_HOST") ?: "localhost";
    $dbname = getenv("MYSQL_DATABASE") ?: "inventario";
    $username = getenv("MYSQL_USER") ?: "root";
    $password = getenv("MYSQL_PASSWORD") ?: "";

    $pdo = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $username, $password);
    return $pdo;
}

# Validación de datos
function validacion($filtro, $texto) {
    if(preg_match("/^" . $filtro . "$/", $texto)) {
        return false; # No hay errores
    }
    else {
        return true; # Hay errores
    }
}

# Evitar inyección de código SQL o JavaScript [Limpiar string]
function limpiar($texto) {
    $texto = trim($texto); # Eliminar espacios en blanco
    $texto = stripslashes($texto); # Eliminar barras con comillas escapadas "Ho\"la" > "Hola"
    $texto = str_ireplace("<script>", "", $texto); # Reemplaza param1 en param3 utilizando param2
    # str_ireplace("Ejemplo", "Hola", "Ejemplo mundo!"); Devuelve "Hola mundo!"
    $texto=str_ireplace("<script>", "", $texto);
    $texto=str_ireplace("</script>", "", $texto);
    $texto=str_ireplace("<script src", "", $texto);
    $texto=str_ireplace("<script type=", "", $texto);
    $texto=str_ireplace("SELECT * FROM", "", $texto);
    $texto=str_ireplace("DELETE FROM", "", $texto);
    $texto=str_ireplace("INSERT INTO", "", $texto);
    $texto=str_ireplace("DROP TABLE", "", $texto);
    $texto=str_ireplace("DROP DATABASE", "", $texto);
    $texto=str_ireplace("TRUNCATE TABLE", "", $texto);
    $texto=str_ireplace("SHOW TABLES;", "", $texto);
    $texto=str_ireplace("SHOW DATABASES;", "", $texto);
    $texto=str_ireplace("<?php", "", $texto);
    $texto=str_ireplace("?>", "", $texto);
    $texto=str_ireplace("--", "", $texto);
    $texto=str_ireplace("^", "", $texto);
    $texto=str_ireplace("<", "", $texto);
    $texto=str_ireplace("[", "", $texto);
    $texto=str_ireplace("]", "", $texto);
    $texto=str_ireplace("==", "", $texto);
    $texto=str_ireplace(";", "", $texto);
    $texto=str_ireplace("::", "", $texto);
    $texto=trim($texto);
    $texto=stripslashes($texto);
    return $texto;
}

# Renombrar fotos
function renombrar_fotos($nombre) {
    $nombre = str_ireplace(" ", "_", $nombre);
    $nombre = str_ireplace("/", "_", $nombre);
    $nombre = str_ireplace("#", "_", $nombre);
    $nombre = str_ireplace("-", "_", $nombre);
    $nombre = str_ireplace("$", "_", $nombre);
    $nombre = str_ireplace(".", "_", $nombre);
    $nombre = str_ireplace(",", "_", $nombre);
    $nombre .= "_" . rand(0, 1000);
    return $nombre;
}

# Paginador de tablas
function paginador_tablas($pagina, $paginasTotales, $url, $botones) {
    $tabla = '<nav class="pagination is-centered" role="navigation" aria-label="pagination">';

    # Página 1 y página anterior
    if($pagina <= 1) {
        $tabla .= '
        <a class="pagination-previous is-disabled" disabled>Anterior</a>
            <ul class="pagination-list">
        ';
    }
    else {
        $tabla .= '
        <a class="pagination-previous" href="' . $url . ($pagina-1) . '">Anterior</a>
            <ul class="pagination-list">
                <li><a class="pagination-link" href="' . $url . '1">1</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
        ';
    }

    $contadorIteraciones = 0;
    
    for($i = $pagina; $i <= $paginasTotales; $i++) {

        if($contadorIteraciones >= $botones) {
            break;
        }

        # Botones intermedios
        if($pagina == $i) {
            $tabla .= '<li><a class="pagination-link is-current" href="' . $url . $i .'">' . $i . '</a></li>';
        }
        else {
            $tabla .= '<li><a class="pagination-link" href="' . $url . $i .'">' . $i . '</a></li>';
        }

        $contadorIteraciones++;
        
    }

    # Página final y página siguiente
    if($pagina >= $paginasTotales) {
        $tabla .= '
        </ul>
        <a class="pagination-next is-disabled" disabled>Siguiente</a>
        ';
    }
    else {
        $tabla .= '
            <li><span class="pagination-ellipsis">&hellip;</span></li>
            <li><a class="pagination-link" href="' . $url . $paginasTotales . '">' . $paginasTotales . '</a></li>
        </ul>
        <a class="pagination-next" href="' . $url . ($pagina+1) .'">Siguiente</a>
        ';
    }

    $tabla .= '</nav>';
    return $tabla;
}

?>