<?php

require_once "models/enlaces.php";
require_once "models/registro.php";

require_once "controllers/controlle.php";
require_once "controllers/registrocontroller.php";

require_once "models/categoria.php";
require_once "controllers/categoriaController.php";


require_once "models/marca.php";
require_once "controllers/marcaController.php";



$categoria = new categoriaController();
$mvc = new MvcController();
$mvc -> pagina();

?>
