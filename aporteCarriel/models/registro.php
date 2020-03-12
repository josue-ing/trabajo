<?php


require_once "conexion.php";

class Datos extends Conexion{

	# REGISTRO DE USUARIOS------------------------------------------
	public function registroUsuarioModel($datosModel, $tabla){

	    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( usuario, codigo, id_categoria,id_marca) 
			                                   VALUES(:usuario,:codigo,:id_categoria,:id_marca)");

		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
		$stmt->bindParam(":id_categoria", $datosModel["id_categoria"], PDO::PARAM_STR);
         $stmt->bindParam(":id_marca", $datosModel["id_marca"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "Success";
		}

		else{
			return "Error";
		}
        # esto pertenece alas variables de session dentro de ese video
        $stmt->close();
		
	}

    
    public function vistaUsuariosModel ( $tabla){

       $stmt =Conexion::conectar()->prepare("SELECT id, usuario, codigo, id_categoria, id_marca FROM $tabla");
       $stmt->execute();

       # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement

	   return $stmt->fetchAll();
	   # esto pertenece alas variables de session dentro de ese video
	   $stmt->close();

  }

   #EDITAR USUARIOS............................................................

    public function editarUsuarioModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("SELECT id, usuario, codigo , id_categoria , id_marca FROM $tabla WHERE id= :id");
	  $stmt->bindParam(":id", $datosModel,PDO::PARAM_INT);
	  $stmt->execute();
	  # el metodo fetchAll :obtiene todas las  fila de un conjunto de resultados asociados al objeto PDOSTatement
	  return $stmt->fetch();
	  # esto pertenece alas variables de session dentro de ese video
	  $stmt->close();

}
 #ACTUALIZAR USUARIOS............................................................

    public function actualizarUsuarioModel ($datosModel, $tabla){

	  $stmt =Conexion::conectar()->prepare("UPDATE $tabla SET usuario = :usuario, codigo = :codigo, id_categoria= :id_categoria, id_marca= :id_marca  WHERE id = :id");
	   
	  $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
	  $stmt->bindParam(":codigo", $datosModel["codigo"], PDO::PARAM_STR);
	  $stmt->bindParam(":id_categoria", $datosModel["id_categoria"], PDO::PARAM_STR);
	   $stmt->bindParam(":id_marca", $datosModel["id_marca"], PDO::PARAM_STR);
	  $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_STR);

     if($stmt->execute()){

		return "success";
	}

	  else{
		
		return "Error";
		
	}
	# esto pertenece alas variables de session dentro de ese video
	$stmt->close();
}


public function borrarUsuarioModel($datosModel, $tabla){


 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

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