<?php

session_name("LOGIN");
session_start();

session_destroy();

if(headers_sent()) {
    echo "<script>window.location.href='index.php';</script>";
    # Redireccionamiento utilizando JavaScript
}
else {
    header("Location: index.php");
    # Redireccionamiento utilizando php
}

# session_destroy() elimina todos los datos relacionados a la sesión menos la cookie
# session_unset() elimina las variables de la sesión

?>