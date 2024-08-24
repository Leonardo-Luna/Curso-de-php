<?php

if(!preg_match("/^[a-zA-Z]{3,10}$/", $_POST["usuario"])) {
    echo "El nombre de usuario no coincide con el formato solicitado.";
    exit();
}

if(!preg_match("/^[a-zA-Z0-9$@.]{8,30}$/", $_POST["password"])) {
    echo "La contrasñea ingresada no coincide con el formato solicitado.";
    exit();
}

# ^ misma verificación del front-end pero en el back-end, debido a que el 
# HTML es modificable con inspeccionar elemento.

if($_POST["usuario"] == "Leo" && $_POST["password"] == "1234") {

    session_name("LOGIN");
    session_start();

    $_SESSION["Nombre"] = "Leo";

    if(headers_sent()) {
        echo "<script>window.location.href='index.php';</script>";
        # Redireccionamiento utilizando JavaScript
    }
    else {
        header("Location: index.php");
        # Redireccionamiento utilizando php
    }
}
else {
    echo "Credenciales incorrectas";
}

?>