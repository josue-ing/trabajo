<?php

class  Controller{

    #REGISTRO DE USUARIOS
    #----------------------------------------------------------
	    public function registroUsuarioController(){
    #variable array almacenar mas de un solo datos

        if (isset($_POST["usuario"])){


		$datosController = array ("usuario" => $_POST["usuario"],
		                         "codigo" => $_POST["codigo"],
		                         "id_categoria"=> $_POST["id_categoria"],
		                         "id_marca"=> $_POST["id_marca"]);
		
		$respuesta= Datos::registroUsuarioModel($datosController, "productos");

		
		if( $respuesta == "sucess"){


			header ("location:index.php?action=registros");

        }
		else {

				header ("location:index.php");
	       }

        }

	}
	
    #INGRESO DE USUARIOS-------------------------------------

        
	  
    #VISTAS DE USUARIOS
    #----------------------------------------
 
        public function vistaUsuariosController (){

 	    $respuesta = Datos::vistaUsuariosModel("productos");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["codigo"].'</td>
				<td>'.$item["id_categoria"].'</td>
				<td>'.$item["id_marca"].'</td>
				<td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
				<td><a a href="index.php?action=ya&idBorrar='.$item["id"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	
	#esto pertenece a el video de actualizar datos PDO parte 1-----------------------------------
	#EDITAR USUARIOS--------------------------------------

	    public function editarUsuarioController(){

		 $datosController= ($_GET["id"]);
		$respuesta = Datos::editarUsuarioModel($datosController , "productos");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id"].'" name="idEditar">

		      <input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>

		      <input type="text" value="'.$respuesta["codigo"].'" name="codigoEditar" required>
	
		      <input type="text" value="'.$respuesta["id_categoria"].'" name="id_categoriaEditar" required>

	            <input type="text" value="'.$respuesta["id_marca"].'" name="id_marcaEditar" required>

		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarUsuarioController(){

			if(isset($_POST["usuarioEditar"])){

				$datosController = array ("id"=>$_POST["idEditar"],
					            "usuario"=>$_POST["usuarioEditar"],
					            "codigo"=>$_POST["codigoEditar"],
								"id_categoria"=>$_POST["id_categoriaEditar"],
								"id_marca"=>$_POST["id_marcaEditar"]);
								
								$respuesta= Datos::actualizarUsuarioModel($datosController, "productos");

                                if ( $respuesta == "success"){

									header("location:index.php?action=ya");
                            }

                                else {

									echo "error";

   } 	
} 	
}


public function borrarUsuarioController(){

	if(isset($_GET["idBorrar"])){
		$datosController = $_GET["idBorrar"];

$respuesta = Datos::borrarUsuarioModel($datosController,"productos");

if($respuesta == "success"){

			header("location:index.php?action=ya");
  }	
 }

} 
}

?>