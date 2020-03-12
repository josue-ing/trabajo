<h1>CATEGORIA</h1>

	<form method="post">
		

		
		<h2>CATEGORIA<input type="text" placeholder="categoria" name="categoria" required></h2>

	<input type="submit" value="Enviar">

	</form>

	<?php
	

	$ingreso = new categoriaController();

	


    $ingreso->registroCategoriaController();



if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "ingreso Exitoso";
	}
}

?>
