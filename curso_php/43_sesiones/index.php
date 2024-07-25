<?php

#session_name("LOGIN"); # En mi opinión no tiene sentido crear la sesión al entrar al index
#session_start(); # Pero en el curso lo hace así (?)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="login.php" method="POST">

        <label>Usuario</label> <br/>
        <input type="text" name="usuario">

        <br/><br/>

        <label>Contraseña</label> <br/>
        <input type="text" name="password">

        <br/><br/>

        <button type="submit">Iniciar sesión</button>

    </form>

    <br/>

    <form action="logout.php" method="POST">

        <button type="submit">Cerrar sesión</button>

    </form>

    <br/>

    <form action="contador.php" method="POST">

        <button type="submit">Ir al contador</button>

    </form>

</body>
</html>