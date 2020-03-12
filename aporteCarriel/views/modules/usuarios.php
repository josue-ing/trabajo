


<h1>PRODUCTOS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>NOMBRE</th>
				<th>CODIGO</th>
				<th>CATEGORIA</th>
				<th>MARCA</th>
				<th>BOTON</th>
				<th>BOTON</th>

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new Controller();

             $ingreso -> vistaUsuariosController();
             
             $ingreso-> borrarUsuarioController();

            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "ya"){
		echo  "Cambio Existoso";
	
 
}

}
    ?>
