<?php

include("for.php");

//si pones dos veces include y el archivo se muestra dos veces. 
//include:muestra por pantalla un warning si insertamos un archivo que no  existe y sigue ejectuando el restodel codigo.

include("for.php");

require("for.php");

//si pones dos veces require y el archivo se muestra dos veces. 
//require:muestra por pantalla un error fatal si insertamos un archivo que no  existe y deja de ejecutar el resto del codigo.


require("for.php");



require_once("for.php");

require_once("for.php");

include_once("for.php");

include_once("for.php");

//require_once y include_once: si pones dos veces require_once o include_once y el archivo se muestra una sola vez.

