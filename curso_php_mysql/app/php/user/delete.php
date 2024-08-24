<?php

$id = limpiar($_GET["user_id_delete"]);

$verificarExistencia = conexion();
$verificarExistencia = $verificarExistencia->query("SELECT usuario_id FROM usuario WHERE usuario_id = '$id'");

if($verificarExistencia->rowCount() == 1) {

    $verificarProductos = conexion();
    $verificarProductos = $verificarProductos->query("SELECT usuario_id FROM producto WHERE usuario_id = '$id' LIMIT 1");

    if($verificarProductos->rowCount() > 0) {
        echo '
        <div class="notification is-danger is-light">
            El usuario seleccionado posee productos registrados, eliminelos primero antes de seguir.
        </div>
        ';
    }
    else {

        $q = conexion();
        $q = $q->prepare("DELETE FROM usuario WHERE usuario_id = :id");
        $q->execute(
            [":id" => $id]
        );

        if($q->rowCount() == 1) {
            echo '
            <div class="notification is-info is-light">
                Se eliminó el usuario correctamente.
            </div>
            ';
        }
        else {
            echo '
            <div class="notification is-danger is-light">
                No se pudo eliminar el usuario, inténtelo de nuevo más tarde.
            ';
        }

        $q = NULL;

    }

    $verificarProductos = NULL;

}
else {
    echo '
    <div class="notification is-danger is-light">
        No existe un usuario bajo esa ID.
    </div>
    ';
}

$verificarExistencia = NULL;

?>