<?php

# La sentencia switch es similar a un conjunto de sentencias if en la misma exprsión.
# La comparación que realiza es de igualdad de contenido ( == ).

$fruta = "Manzana";

switch($fruta) { # Se aclara la variable sobre la cual se quiere comparar
    case "Manzana": 
        echo "La fruta es una Manzana";
    break; # Cierre del case

    case "Pera":
        echo "La fruta es una Pera";
    break;

    default: # Caso por defecto, se usa si no se cumple con ninguno de los definidos
        echo "La fruta no es Manzana ni Pera";
}

?>