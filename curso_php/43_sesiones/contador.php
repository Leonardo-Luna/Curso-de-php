<?php

# Explicación: https://www.youtube.com/watch?v=oLV3z--ZzRM

# A diferencia de las cookies, las sesiones se almacenan en el servidor.
# Generan una cookie para permitir la sincronización de información.

session_name("LOGIN"); # Modifica el nombre de la cookie de sesión
# session_id("php"); # Modifica el id de la cookie de sesión

session_start(); # Inicia una sesión, en caso de no existir, se crea

if(isset($_SESSION["contador"])) { # Si ya existe la sesión
    $_SESSION["contador"]++; # Incremento en uno el contador
}
else {
    $_SESSION["contador"] = 1; # Sino, lo establezco
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo $_SESSION["Nombre"] . " recargó esta página " . $_SESSION["contador"] . " veces." ?>

</body>
</html>