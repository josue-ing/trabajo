
<?php

    include 'views/conexion1.php';

    $query=mysqli_query($mysqli,"SELECT id_categoria, categoria FROM categoria");
    
   $query1=mysqli_query($mysqli,"SELECT id_marca, marca FROM marca");
?>


<html>
    <head>
        <title>
            Ejemplo
        </title>
    </head>
    <body>
        <form method="post">

            
                <center>

	
	<input type="text" placeholder="nombre" name="usuario" required>

	<input type="text" placeholder="Codigo" name="codigo" required>

	 <label>Categoria</label>
                    <select name="id_categoria">
                        <option value="0">Selecciona una opcion</option>
                    <?php 
                        while($datos = mysqli_fetch_array($query))
                        {
                    ?>
                            <option value="<?php echo $datos['id_categoria']?>"> <?php echo $datos['categoria']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                </p>
                  
                </center>

                <p>

                 <center>
                    <label>Marca</label>
                    <select name="id_marca">
                        <option value="0">Selecciona una opcion</option>
                    <?php 
                        while($datos1 = mysqli_fetch_array($query1))
                        {
                    ?>
                            <option value="<?php echo $datos1['id_marca']?>"> <?php echo $datos1['marca']?> </option>
                    <?php
                        }
                    ?> 
                    </select>
                    <p><input type="submit" value="Enviar"></p>
                </center>
            </p>
        </form>
    </body>
</html>



<?php

$registro = new MvcController();
$registro = new Controller();
$registro -> registroUsuarioController();

  if (isset($_GET["action"])){
  	if ($_GET["action"] == "ok"){
  		echo "Registro Exitoso";
  	
   }

}

?>