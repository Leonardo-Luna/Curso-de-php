<?php

$buscador = limpiar($_POST["modulo_buscador"]);
$modulos = ["usuario", "categoria", "producto"]; # Campo value el input

if(in_array($buscador, $modulos)) {
    $modulos_url = [
        "usuario" => "user/search",
        "categoria" => "category/search",
        "producto" => "product/search"
    ];

    $modulos_url = $modulos_url[$buscador];
    $buscador = "busqueda_" . $buscador;

    # Iniciar búsqueda
    if(isset($_POST["txt_buscador"])) {
        $txt = limpiar($_POST["txt_buscador"]);

        if($txt == "") {
            echo '
            <div class="notification is-danger is-light">
                El término de búsqueda no puede estar vacío.
            </div>
            ';
        }
        else {
            if(validacion("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}", $txt)) {
                echo '
                <div class="notification is-danger is-light">
                    El término de búsqueda contiene caracteres inválidos.
                </div>
                ';
            }
            else {
                $_SESSION[$buscador] = $txt;
                header("Location: index.php?view=" . $modulos_url , true, 303);
                exit();
            }
        }
    }

    # Eliminar la búsqueda
    if(isset($_POST["eliminar_buscador"])) {
        unset($_SESSION[$buscador]);
        header("Location: index.php?view=" . $modulos_url, true, 303);
        exit();
    }

}
else {
    echo '
    <div class="notification is-danger is-light">
        Ocurrió un error inesperado, inténtelo de nuevo más tarde.
    </div>
    ';
}

?>