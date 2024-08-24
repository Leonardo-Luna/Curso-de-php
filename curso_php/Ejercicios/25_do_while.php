<?php

/*

El do while es muy similar al while, la única diferencia es que primero se ejecuta el
bloque de código y después se verifica la condición. Esto significa que sin importa qué,
el código se va a ejecutar POR LO MENOS una vez.

*/

# En este ejemplo se va a imprimir 100 debido a que la comparación se hace después de
# la ejecución del código

$numero = 100;

do {
    echo $numero++ . "<br/>";
} while($numero <= 10);

# Ejemplo relativamente normal:

$numero = 1;

do {
    echo $numero++ . "<br/>";
} while($numero <= 10);

?>