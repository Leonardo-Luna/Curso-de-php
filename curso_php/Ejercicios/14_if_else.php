<?php

# Si la sentencia dentro del if() es verdadera, se ejecutará el código en las llaves que le siguen
# Mientras que si es falsa, se pasará a ejecutar lo que esté dentro de las llaves del else

$edad = 20;

if($edad >= 18) {
    echo "El usuario es mayor de edad.";
}
else {
    echo "El usuario no es mayor de edad.";
}

?>