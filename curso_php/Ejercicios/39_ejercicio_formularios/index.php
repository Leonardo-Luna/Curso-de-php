<?php

/*

Realice un programa que reciba un número ingresado por teclado y muestre en pantalla
sus primeros 10 múltiplos.

*/

if(isset($_POST["numero"]) && !(empty($_POST["numero"]))) {

    $numero = $_POST["numero"];

    if(is_numeric($numero)) {

        for($i = 1; $i <= 10; $i++) {
            echo "{$numero} x {$i} = " . $numero*$i . "<br/>";
        }

    }
    else {
        echo "El valor ingresado no es válido.";
    }

}
else {
    echo "No se ingresó ningún número.";
}

?>
