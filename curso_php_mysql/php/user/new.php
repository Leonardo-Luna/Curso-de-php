<?php

require_once "../main.php";

# Almacenamiento de datos
$nombre = limpiar($_POST["usuario_nombre"]);
$apellido = limpiar($_POST["usuario_apellido"]);

$usuario = limpiar($_POST["usuario_usuario"]);
$email = limpiar($_POST["usuario_email"]);

$clave1 = limpiar($_POST["usuario_clave_1"]);
$clave2 = limpiar($_POST["usuario_clave_2"]);

# Verificación de campos obligatorios
if($nombre == "" || $apellido == "" || $usuario == "" || $email == "" || $clave1 == "" || $clave2 == "") {
    echo '
    <div class="notification is-danger is-light">
        Todos los campos son obligatorios.
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
else {
    $q_user = conexion();
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
else {
    $q_email = conexion();
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
            Las claves no coinciden.
        </div>
        ';
        exit();
    }
    else {
        $clave = password_hash($clave1, PASSWORD_BCRYPT, ["cost"=>10]);
    }
}

# Guardado de datos
$conn = conexion();

$conn = $conn->prepare("INSERT INTO usuario(usuario_nombre, usuario_apellido, usuario_usuario, usuario_clave, usuario_email) VALUES(:nombre, :apellido, :usuario, :clave, :email)");

$marcadores = [
    ":nombre" => $nombre,
    ":apellido" => $apellido,
    ":usuario" => $usuario,
    ":clave" => $clave,
    ":email" => $email
];

$conn->execute($marcadores);

if($conn->rowCount() == 1) {
    echo '
    <div class="notification is-info is-light">
        Usuario registrado correctamente. <a href="index.php">Inicie sesión</a> para continuar.
    </div>
    ';
}
else {
    echo '
    <div class="notification is-danger is-light">
        No se pudo registrar el usuario, inténtelo nuevamente.
    </div>
    ';
}

$conn = NULL;

?>