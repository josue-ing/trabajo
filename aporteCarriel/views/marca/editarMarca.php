<h1>MARCA</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				
				<th>MARCA</th>
				<th>BOTON</th>
				<th>BOTON</th>

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new marcaController();

             $ingreso -> vistaMarcaController();

                $ingreso-> borrarMarcaController();


            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "jean"){
		echo  "Cambio Existoso";
	
 
}

}
    ?>
