<?php

/*

1) Diseñe un programa que imprima los números del 1 hasta el 20.

2) Diseñe un programa que imprima la tabla de multiplicar de un número dado hasta el factor 12.

*/

# 1)

$numero = 1;

while($numero <= 20) {
    echo $numero++ . "<br/>";
}

# 2)

$numero = 4;
$multiplicador = 1; # No sabría qué nombre darle

while($multiplicador <= 12) {
    echo "{$numero} x {$multiplicador} = " . $numero * $multiplicador++ . "<br/>";
}

?>