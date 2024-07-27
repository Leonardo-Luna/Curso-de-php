<?php

require_once "../../inc/session_start.php";
require_once "../main.php";

$id = limpiar($_POST["usuario_id"]);

# Verificar exitencia del usuario
$conn = conexion();
$conn = $conn->query("SELECT * FROM usuario WHERE usuario_id = '$id'");

if($conn->rowCount() <= 0) {
    echo '
    <div class="notification is-danger is-light">
        El usuario buscado no existe.
    </div>
    ';
    exit();
}
else {
    $datos = $conn->fetch();
}

$conn = NULL;

$loginUser = limpiar($_POST["login_usuario"]);
$loginClave = limpiar($_POST["login_clave"]);

if($loginUser == "" || $loginClave == "") {
    echo '
    <div class="notification is-danger is-light">
        Debe ingresar sus credenciales para completar el guardado.
    </div>
    ';
    exit();
}

if(validacion("[a-zA-Z0-9]{1,20}", $loginUser)) {
    echo '
    <div class="notification is-danger is-light">
        El usuario contiene caracteres inválidos.
    </div>
    ';
    exit();
}

if(validacion("[a-zA-Z0-9$@.-]{1,100}", $loginClave)) {
    echo '
    <div class="notification is-danger is-light">
        La clave contiene caracteres inválidos.
    </div>
    ';
    exit();
}

# Verificar credenciales
$conn = conexion();
$conn = $conn->query("SELECT usuario_usuario, usuario_clave FROM usuario WHERE usuario_usuario = '$loginUser' AND usuario_id = '" . $_SESSION['id'] . "'");

if($conn->rowCount() == 1) {
    $conn = $conn->fetch();

    if($conn["usuario_usuario"] != $loginUser || !password_verify($loginClave, $conn["usuario_clave"])) {
        echo '
        <div class="notification is-danger is-light">
            Las credenciales son incorrectas.
        </div>
        ';
        exit();
    }

}
else {
    echo '
    <div class="notification is-danger is-light">
        Las credenciales son incorrectas.
    </div>
    ';
    exit();
}

$conn = NULL;

$nombre = limpiar($_POST["usuario_nombre"]);
$apellido = limpiar($_POST["usuario_apellido"]);

$usuario = limpiar($_POST["usuario_usuario"]);
$email = limpiar($_POST["usuario_email"]);

$clave1 = limpiar($_POST["usuario_clave_1"]);
$clave2 = limpiar($_POST["usuario_clave_2"]);

if($nombre == "" || $apellido == "" || $usuario == "" || $email == "") {
    echo '
    <div class="notification is-danger is-light">
        Debe completar los campos obligatorios.
    </div>
    ';
    exit();
}

# Validación del patrón en los datos
if(validacion("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}", $nombre)) {
    echo '
    <div class="notification is-danger is-light">
        El nombre contiene caracteres inválidos.
    </div>
    ';
    exit();
}

if(validacion("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}", $apellido)) {
    echo '
    <div class="notification is-danger is-light">
        El apellido contiene caracteres inválidos.
    </div>
    ';
    exit();
}

if(validacion("[a-zA-Z0-9]{1,20}", $usuario)) {
    echo '
    <div class="notification is-danger is-light">
        El usuario contiene caracteres inválidos.
    </div>
    ';
    exit();
}
elseif($usuario != $datos["usuario_usuario"]) { # Verifico que sea distinto al propio
    $q_user = conexion(); # Si es distinto, verifico que no esté en uso
    $q_user = $q_user->query("SELECT usuario_usuario FROM usuario WHERE usuario_usuario='$usuario'");

    if($q_user->rowCount() > 0) {
        echo '
        <div class="notification is-danger is-light">
            El usuario ya está registrado.
        </div>
        ';
        exit();
    }

    $conn = NULL;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '
    <div class="notification is-danger is-light">
        El correo electrónico contiene caracteres inválidos.
    </div>
    ';
    exit();
}
else if($email != $datos["usuario_email"]){ # Verifico que sea distinto al propio
    $q_email = conexion(); # Si es distinto, verifico que no esté en uso
    $q_email = $q_email->query("SELECT usuario_email FROM usuario WHERE usuario_email='$email'");

    if($q_email->rowCount() > 0) {
        echo '
        <div class="notification is-danger is-light">
            El correo electrónico ya está registrado.
        </div>
        ';
        exit();
    }

    $conn = NULL;
}

if($clave1 != "" || $clave2 != "") {

    if(validacion("[a-zA-Z0-9$@.-]{1,100}", $clave1) || validacion("[a-zA-Z0-9$@.-]{1,100}", $clave2)) {
        echo '
        <div class="notification is-danger is-light">
            La clave contiene caracteres inválidos.
        </div>
        ';
        exit();
    }
    elseif (strlen($clave1) < 7 || strlen($clave2) < 7){
        echo '
        <div class="notification is-danger is-light">
            La clave debe tener por lo menos 7 caracteres.
        </div>
        ';
        exit();
    }
    else {
        if($clave1 != $clave2) {
            echo '
            <div class="notification is-danger is-light">
                La clave nueva no coincide con su repetición.
            </div>
            ';
            exit();
        }
        else {
            $clave = password_hash($clave1, PASSWORD_BCRYPT, ["cost" => 10]);
        }
    }
}
else {
    $clave = $datos['usuario_clave'];
}

# Actualización de datos

$q = conexion();
$q = $q->prepare("UPDATE usuario SET usuario_usuario = :usuario, usuario_nombre = :nombre, usuario_apellido = :apellido, usuario_email = :email, usuario_clave = :clave WHERE usuario_id = :id");

$marcadores = [
    ":nombre" => $nombre,
    ":apellido" => $apellido,
    ":usuario" => $usuario,
    ":clave" => $clave,
    ":email" => $email,
    ":id" => $id
];

if($q->execute($marcadores)) {
    echo '
    <div class="notification is-info is-light">
        Usuario actualizado correctamente.
    </div>
    ';
}
else {
    echo '
    <div class="notification is-danger is-light">
        No se pudo actualizar el usuario, inténtelo nuevamente.
    </div>
    ';
}

$q = NULL;

?>