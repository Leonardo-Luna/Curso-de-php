<?php

/*

Las cookies son un mecanismo por el que se almacenan datos en el navegador para monitorizar
o identificar a los usuarios que vuelvan al sitio web. Se almacenan en el navegador del cliente.

Se deben crear antes del doctype ya que deben ser generadas antes de que el navegador procece el HTML.

Ejemplos: Preferencias de idioma, seguimiento de anuncios, etc.

setcookie(nombre, valor, expiracion, ruta, dominio, secure, httponly);

*/

setcookie("Idioma", "es", time()+60*60*24*30, "/", "localhost");
# es = español || time() = tiempo actual + 30 días || "/" = ruta actual
# secure true = solo se crea la cookie en https (conexión segura), false = se crea siempre
# httponly true = solo se puede acceder mediante el protocolo http, false = se puede siempre

# Para eliminar una cookie se le debe setear un tiempo negativo, es decir, que ya haya pasado:

setcookie("Idioma", "es", time()-60, "/", "localhost"); # Elimina la cookie

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_COOKIE["Idioma"]; ?></h1>
</body>
</html>