<?php

/*

Método por el cual se pueden realizar búsquedas dentro de cadenas de caracteres sin importar
la amplitud de la búsqueda requerida de un patrón definido de caracteres, las expresiones regulares
proporcionan una solución práctica al problema.

*/

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
        <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlenght="10">
    <!-- Caracteres de a-z y A-Z, longitud mímina 3 y longitud máxima 10 -->
        <br/><br/>

        <label>Contraseña</label> <br/>
        <input type="text" name="password" pattern="[a-zA-Z0-9$@.]{8,30}" maxlenght="30">
    <!-- Caracteres de a-z, A-Z, 0-9 y [$ @ .], longitud mímina 3 y longitud máxima 10 -->
        <br/><br/>

        <button type="submit">Iniciar sesión</button>

    </form>

</body>
</html>