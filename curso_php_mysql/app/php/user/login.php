<?php

$user = limpiar($_POST["login_usuario"]);
$clave = limpiar($_POST["login_clave"]);

if($user == "" || $clave == "") {
    echo '
    <div class="notification is-danger is-light">
        Deben completarse los campos obligatorios.
    </div>
    ';
    exit();
}

if(validacion("[a-zA-Z0-9]{1,20}", $user)) {
    echo '
    <div class="notification is-danger is-light">
        El usuario ingresado contiene caracteres inválidos.
    </div>
    ';
    exit();
}

if(validacion("[a-zA-Z0-9$@.-]{1,100}", $clave)) {
    echo '
    <div class="notification is-danger is-light">
        La clave ingresada contiene caracteres inválidos.
    </div>
    ';
    exit();
}

$q_user = conexion();
$q_user = $q_user->query("SELECT * FROM usuario WHERE usuario_usuario='$user'");

if($q_user->rowCount() == 0) {
    echo '
    <div class="notification is-danger is-light">
        Las credenciales ingresadas son incorrectas.
    </div>
    ';
    exit();
}
else {
    $q_user = $q_user->fetch();

    if($q_user["usuario_usuario"] == $user && password_verify($clave, $q_user["usuario_clave"])) {
        $_SESSION["id"] = $q_user["usuario_id"];
        $_SESSION["usuario"] = $q_user["usuario_usuario"];

        if(headers_sent()) {
            echo "<script>window.location.href='index.php?view=home';</script>";
        }
        else {
            header("Location: index.php?view=home");
        }

    }
    else {
        echo '
        <div class="notification is-danger is-light">
            Las credenciales ingresadas son incorrectas.
        </div>
        ';
        exit();
    }
}

$q_user = NULL;

?>