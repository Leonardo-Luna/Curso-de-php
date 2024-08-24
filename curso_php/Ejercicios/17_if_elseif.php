<?php

# elseif: Si no se ejecuta el código de un if() se verifica la condicion del elseif()

$numero = 5;

if($numero == 4) {
    echo "El número es 4"; # Da falso, evalúa el elseif
}
else if($numero == 5) {
    echo "El número es 5"; # Da verdadero, se ejecuta su código y no se pasa por el else
}
else {
    echo "El número no es 4 ni 5";
}

?>