<?php

session_name("LOGIN");
session_start();

session_destroy();

# session_destroy() elimina todos los datos relacionados a la sesión menos la cookie
# session_unset() elimina las variables de la sesión

?>