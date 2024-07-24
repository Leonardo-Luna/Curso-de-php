<?php

/*

Pida a un usuario la edad y el género para que la computadora le indique si ya puede jubilarse.
Tome en cuenta que un hombre se puede jubilar cuando tenga 60 años o más, en cambio,
una mujer mayor se podrá jubilar si tiene más de 54 años.

*/

$genero = "M";
$edad = 60;

if($genero == "M") {
    if($edad >= 60) {
        echo "Puede jubilarse";
    }
    else {
        echo "No puede jubilarse. Espere " . 60 - $edad . " años.";
    }
}
elseif($genero == "F") {
    if($edad > 54) {
        echo "Puede jubilarse";
    }
    else {
        echo "No puede jubilarse. Espere " . 55 - $edad . " años.";
    }
}
else {
    echo "No poseo información suficiente para responder a la pregunta (?).";
}

?>