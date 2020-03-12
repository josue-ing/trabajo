<h1>EDITAR MARCA</h1>

<form method="post">
 
  <?php

  # esto es del video de actualizar datos PDO parte 2 y ya paso la parte 1------
 
  $editarMarca = new MvcController();
  $editarMarca = new marcaController();
  $editarMarca->editarMarcaController(); 
  $editarMarca->actualizarMarcaController(); 

?>	
	
</form>