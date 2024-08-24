<?php

/*

1) Realizar un programa en donde se pide la edad del usuario; si es mayor de edad debe
aparecer un mensaje indicándolo.

2) En un almacén se hace un 20% de descuento a los clientes cuya compra supere los $100
¿Cuál será la cantidad que pagará una persona por su compra?

*/

# 1)
$edad = -1;

if($edad >= 18) {
    echo "El usuario es mayor de edad";
}

# 2)
$total = 200;

if($total > 100) {
    $total = $total - ($total*0.2);
}
echo "El total a pagar es {$total}";

?>