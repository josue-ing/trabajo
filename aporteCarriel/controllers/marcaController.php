<?php

class marcaController{


	# ---Registro de usuarios---
	public function registroMarcaController(){

		if(isset($_POST["marca"])){

			$datosController = array("marca"=>$_POST["marca"]);

			$repuesta = marcaDatos::registroMarcaModel($datosController,"marca");

			if($repuesta=="success"){
				
				header("location:index.php?action=registroMarca");

			}
			else{

				header("location:index.php");
			}

		}
	}




        public function vistaMarcaController (){

 	    $respuesta = marcaDatos::vistaMarcaModel("marca");

    # el Constructor foreach es modo mas sencillode iterar sobre arrays y objetos

 	    foreach ($respuesta as $row => $item ){
 	    	echo '<tr>
				<td>'.$item["marca"].'</td>
				
				<td><a href="index.php?action=ko&id_marca='.$item["id_marca"].'"><button>Editar</button></a></td>
				<td><a a href="index.php?action=jean&idBorrar='.$item["id_marca"].'"><button>Borrar</button></a></td>
			  </tr>'; 

 	    }   

    }    
	


	 public function editarMarcaController(){

		$datosController= $_GET["id_marca"];
		$respuesta = marcaDatos::editarMarcaModel($datosController , "marca");

		#esto pertenece a el video de actualizar datos PDO parte 2-----------------------------------
		
		echo '<input type= "hidden" value="'.$respuesta["id_marca"].'" name="idEditar">

		      <input type="text" value="'.$respuesta["marca"].'" name="marcaEditar" required>

		      
		      <input type="submit" value="Actualizar">';

	 } 

	 #ACTUALIZAR USUARIOS----------------------------------------

	    public function actualizarMarcaController(){

			if(isset($_POST["marcaEditar"])){

				$datosController = array ("id_marca"=>$_POST["idEditar"],
					            "marca"=>$_POST["marcaEditar"]);
								
								$respuesta= marcaDatos::actualizarMarcaModel($datosController, "marca");

                                if ( $respuesta == "success"){

									header("location:index.php?action=jean");
                            }

                                else {

									echo "error";

   }	
} 	
}


public function borrarMarcaController(){

	if(isset($_GET["idBorrar"])){
		$datosController = $_GET["idBorrar"];

$respuesta = marcaDatos::borrarMarcaModel($datosController,"marca");

if($respuesta == "success"){

			header("location:index.php?action=jean");
  }	
 }



}

}




?>