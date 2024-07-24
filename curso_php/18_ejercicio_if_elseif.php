<?php

/*

1) Se desea diseñar un programa que escriba los nombres de los días de la semana
en función del valor de una variable DIA.

2) En una fábrica de computadoras se planea ofrecer a los clientes un descuentos que
dependerá del número de computadores que compre. Si las computadoras son menos de cinco se les dará
un 10% de descuento sobre el total de la compra. Si el número de computadoras es mayor o igual
a cinco pero menos de diez, se le otorga un 20% de descuento. Finalmente, si son 10 o más
se les da un 40% de descuento. El precio de cada computadora es de $700.

*/

# 1)

$DIA = 1;

if($DIA == 1) {
    echo "Lunes";
}
elseif($DIA == 2) {
    echo "Martes";
}
elseif($DIA == 3) {
    echo "Miércoles";
}
elseif($DIA == 4) {
    echo "Jueves";
}
elseif($DIA == 5) {
    echo "Viernes";
}
elseif($DIA == 6) {
    echo "Sábado";
}
elseif($DIA == 7) {
    echo "Domingo";
}
else {
    echo "Ese día de la semana no existe.";
}

# 2)

$precio = 700;
$cantComputadoras = 10;
$total = $cantComputadoras * $precio;

if($cantComputadoras < 5) {
    $total -= $total*0.1;
}
elseif($cantComputadoras < 10) {
    $total -= $total*0.2;
}
else {
    $total -= $total*0.4;
}

echo "El total a pagar es de {$total}";

?>