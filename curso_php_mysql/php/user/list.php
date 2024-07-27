<?php

$inicio = ($pagina > 0) ? (($registros*$pagina)-$registros) : 0; # De donde empezar a mostrar registros
$tabla = "";

if(isset($busqueda) && $busqueda != "") {
    # Listado con búsqueda especificada
    $consulta = "SELECT * FROM usuario WHERE ((usuario_id != '" . $_SESSION['id'] . "') AND (usuario_nombre LIKE '%$busqueda%' OR usuario_apellido LIKE '%$busqueda%' OR usuario_email LIKE '%$busqueda%')) ORDER BY usuario_id ASC LIMIT $inicio,$registros";
    $consulta_total = "SELECT COUNT(usuario_id) FROM usuario WHERE ((usuario_id != '" . $_SESSION['id'] . "') AND (usuario_nombre LIKE '%$busqueda%' OR usuario_apellido LIKE '%$busqueda%' OR usuario_email LIKE '%$busqueda%'))";
}
else {
    # Listado general
    $consulta = "SELECT * FROM usuario WHERE usuario_id != '" . $_SESSION['id'] . "' ORDER BY usuario_id ASC LIMIT $inicio,$registros";
    $consulta_total = "SELECT COUNT(usuario_id) FROM usuario WHERE usuario_id != '" . $_SESSION['id'] . "'";
}

$conn = conexion();

$datos = $conn->query($consulta);
$datos = $datos->fetchAll(); # Array de todos los datos

$cantDatos = $conn->query($consulta_total);
$cantDatos = (int) $cantDatos->fetchColumn(); # Casteo la única columna

$conn = NULL;

$cantPaginas = ceil($cantDatos / $registros);

$tabla .= '
    <div class="table">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th class="has-text-centered">ID</th>
                    <th class="has-text-centered">Nombres</th>
                    <th class="has-text-centered">Apellidos</th>
                    <th class="has-text-centered">Usuario</th>
                    <th class="has-text-centered">Email</th>
                    <th class="has-text-centered" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
            ';

if($cantDatos >= 1 && $pagina <= $cantPaginas) {
    $contador = $inicio+1;
    $pag_inicio = $inicio+1;

    foreach($datos as $row) {
        $tabla .= '
    <tr class="has-text-centered">
        <td>' . $row['usuario_id'] . '</td>
        <td>' . $row['usuario_nombre'] . '</td>
        <td>' . $row['usuario_apellido'] . '</td>
        <td>' . $row['usuario_usuario'] . '</td>
        <td>' . $row['usuario_email'] . '</td>
        <td>
            <a href="index.php?view=user/update&user_id_update=' . $row['usuario_id'] . '" class="button is-success is-small">Actualizar</a>
        </td>
        <td>
            <a href="' . $url . $pagina . '&user_id_delete=' . $row['usuario_id'] . '" class="button is-danger is-small">Eliminar</a>
        </td>
    </tr>
                ';

        $contador++;
    }
    $pag_final = $contador-1;
}
else {
    if($cantDatos >= 1) {
        $tabla .= '
    <tr class="has-text-centered">
        <td colspan="7">
            <a href="' . $url . '1" class="button is-link is-small mt-4 mb-4">
                Haga clic aquí para recargar el listado.
            </a>
        </td>
    </tr>
                ';
    }
    else {
        $tabla .= '
    <tr class="has-text-centered" >
        <td colspan="7">
            No hay datos para mostrar.
        </td>
    </tr>
                ';
    }
}

$tabla .= '
            </tbody>
        </table>
    </div>
            ';

if($cantDatos >= 1 && $pagina <= $cantPaginas) {
    $tabla .= '
    <p class="has-text-right">Mostrando usuarios <strong>' . $pag_inicio . '</strong> al <strong>' . $pag_final . '</strong> de un <strong>total de ' . $cantDatos . '</strong></p>
    <p class="has-text-right is-size-7 mb-2">[No se mostrará el usuario con el que está navegando]</p>
            ';
}

echo $tabla;

if($cantDatos >= 1 && $pagina <= $cantPaginas) {
    echo paginador_tablas($pagina, $cantPaginas, $url, 3);
}

?>