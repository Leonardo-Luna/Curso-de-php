<?php

/*

1) Hacer un programa que calcule el total a pagar por la compra de camisas. Si se compran
tres camisas o más se aplica un descuento del 20% sobre el total de la compra, y si son menos de
tres camisas, un descuento del 10%.

*/

$totalCamisas = 7;
$precio = 10;

$total = $totalCamisas * $precio; # Calculo el monto total a pagar

$total = ($totalCamisas >= 3) ? ($total - ($total*0.2)) : ($total - ($total*0.1)); # Calculo el descuento

echo "El total a pagar es {$total}";

?>