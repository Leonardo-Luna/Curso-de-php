<?php

# Simulación de log-in pre base de datos

if($_POST["usuario"] == "Leo" && $_POST["password"] == "1234") {

    session_name("LOGIN");
    session_start();

    $_SESSION["Nombre"] = "Leo";

    echo "Sesión iniciada";
}
else {
    echo "Credenciales incorrectas";
}

?>