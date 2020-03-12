<h1>MARCA</h1>

	<form method="post">
		

		
		<h2>MARCA<input type="text" placeholder="marca" name="marca" required></h2>

	<input type="submit" value="Enviar">

	</form>

	<?php

$ingreso = new marcaController();


$ingreso->registroMarcaController();





if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
