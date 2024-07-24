<?php

# Los operadores de asignación permiten realizar operaciones de una forma más corta

/*

Asignar                 |       =       |       $a = 10;
Sumar y asignar         |       +=      |       $a += 10;
Restar y asignar        |       -=      |       $a -= 10;
Multiplicar y asignar   |       *=      |       $a *= 10;
Dividir y asignar       |       /=      |       $a /= 10;
Concatenar y asignar    |       .=      |       $a .= " es el valor de A";

Por ejemplo, decir $a += 10; es equivalente a $a = $a + 10;
$a -= 10; es equivalente a $a = $a - 10;
$a .= " es el valor de A"; es equivalente a $a = $a . " es el valor de A";

*/

$nombre = "Leo";
$nombre .= " es de Argentina";
echo $nombre; # Imprime "Leo es de Argentina"

$numero = 5;
$numero += 10;
echo $numero; # Imprime 15;

?>