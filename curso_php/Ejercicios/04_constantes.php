<?php

# Constante: Variable cuyo valor no puede cambiar durante la ejecución del programa

#Sintáxis vieja
define("NOMBRE", "Leo");

# No se puede volver a utilizar el mismo nombre
# define("NOMBRE", "Pepe"); # <- Error

#Sintáxis nueva
const NOMBRE2 = "Pepe";

# const NOMBRE2 = "Pepe"; # <- Error

?>