


<h1>CATEGORIA</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				
	       <th>CATEGORIA</th>
				
				<th>BOTON</th>
				<th>BOTON</th>

			</tr>

		</thead>

		<tbody>

			 <?php
			 
             $ingreso = new MvcController();
             $ingreso = new categoriaController();

          
             $ingreso -> vistaCategoriaController();

             $ingreso-> borrarCategoriaController();


            ?>
		

		</tbody>

	</table>

	       <?php


        
if (isset($_GET["action"])){
	if ($_GET["action"] == "cambio"){
		echo  "Cambio Existoso";
	
 }
 
}



    ?>

