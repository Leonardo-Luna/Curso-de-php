<?php

/*

Se desea diseñar un programa que escriba los nombre de los días de la semana en función
del valor de una variable DIA.

*/

$DIA = 5;

switch($DIA) {
    case 1:
        echo "Lunes";
    break;

    case 2:
        echo "Martes";
    break;

    case 3:
        echo "Miércoles";
    break;

    case 4:
        echo "Jueves";
    break;

    case 5:
        echo "Viernes";
    break;

    case 6:
        echo "Sábado";
    break;

    case 7:
        echo "Domingo";
    break;

    default:
        echo "El valor ingresado no corresponde a un día.";
}

?>