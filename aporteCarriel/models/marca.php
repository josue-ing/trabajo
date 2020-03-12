<?php


require_once "conexion.php";

class marcaDatos extends Conexion{

	# Registro de usuarios
	public function registroMarcaModel($datosModel,$tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( marca ) VALUES(:marca)");

		$stmt->bindParam(":marca", $datosModel["marca"], PDO::PARAM_STR);
		

		
		if($stmt->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}
	}



    public function vistaMarcaModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT id_marca, marca FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public function editarMarcaModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT id_marca, marca FROM $tabla WHERE id_marca= :id_marca");
	  $stmt->bindParam(":id_marca", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public function actualizarMarcaModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET marca = :marca WHERE id_marca = :id_marca");
	   
	  $stmt->bindParam(":marca", $datosModel["marca"], PDO::PARAM_STR);
	    $stmt->bindParam(":id_marca", $datosModel["id_marca"], PDO::PARAM_INT);
	 
     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}

public function borrarMarcaModel($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_marca = :id_marca");

    $stmt->bindParam(":id_marca", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){

			return "success";
		}
		else{
			
			return "Error";
		}

		$stmt -> close();

	

}




	


}


	





?>
