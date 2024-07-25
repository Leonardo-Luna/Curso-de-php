<?php

# Simulación de log-in pre base de datos

if($_POST["usuario"] == "Leo" && $_POST["password"] == "1234") {

    session_name("LOGIN");
    session_start();

    $_SESSION["Nombre"] = "Leo";

    /*
        Los redireccionamientos con php solo pueden realizarse si no hubo salida
        de código hasta ese momento, por lo tanto, la función headers_sent() indica
        si hubo, en el caso de que haya, fuerza el redireccionamiento con JavaScript,
        si no hubo, utiliza el de php.
    */

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