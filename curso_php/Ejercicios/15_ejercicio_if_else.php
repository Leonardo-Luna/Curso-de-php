<?php

/*

1) Calcular el total que una persona debe pagar en una gomería. El precio de cada llanta es de $800
si se compran menos de 5 llantas, y de $700 si se compran 5 o más.

2) Determinar si un alumno aprueba o reprueba un curso, sabiendo que aprobará si su promedio de tres
calificaciones es mayor o igual a 7. Reprueba en caso contrario.

*/

# 1)

$total = 0;
$cantLlantas = 4;

if($cantLlantas >= 5) {
    $total = 700*$cantLlantas;
}
else {
    $total = 800*$cantLlantas;
}

echo "El total a pagar es {$total}";

# 2

$cantNotas = 3;
$nota1 = 7;
$nota2 = 6;
$nota3 = 9;

$promedio = ($nota1 + $nota2 + $nota3) / $cantNotas;

if($promedio >= 7) {
    echo "El alumno aprobó el curso. Promedio: {$promedio}";
}
else {
    echo "El alumno reprobó el curso. Promedio: {$promedio}";
}

?>