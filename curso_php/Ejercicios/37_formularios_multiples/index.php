<?php

# Explicación: https://www.youtube.com/watch?v=-hdmS5NFHkA

var_dump($_POST["asignatura"]);

$asignaturasSeleccionadas = $_POST["asignatura"];

foreach($asignaturasSeleccionadas as $valor) {
    echo  "<br/>" . $valor;
}

var_dump($_POST["frutas"]);

$frutasSeleccionadas = $_POST["frutas"];

foreach($frutasSeleccionadas as $valor) {
    echo "<br/>" . $valor;
}

?>