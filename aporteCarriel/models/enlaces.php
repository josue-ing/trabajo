<?php 
#listas blanca 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "ingresar" || $enlaces == "usuarios" || $enlaces == "editar" || $enlaces == "salir"){

			$module =  "views/modules/".$enlaces.".php";
		
		}

		else if($enlaces == "index"){

			$module =  "views/modules/registro.php";
		
		}

		else if($enlaces == "ok"){

			$module =  "views/modules/registro.php";
		
		}

		else if($enlaces == "fallo"){

			$module =  "views/modules/usuarios.php";
		
		}

		else if($enlaces == "cambios"){

			$module =  "views/modules/usuarios.php";
		
		}

		else{

			$module =  "views/modules/registro.php";

		}


		if($enlaces =="registroCategoria" ){
				$module =  "views/categoria/categoriaDatos.php";
		}



		if($enlaces =="registroMarca" ){
				$module =  "views/marca/marcaDatos.php";
		}

		if($enlaces == "cam"){

			$module =  "views/marca/editarMarca.php";
		
		}

		if($enlaces =="ko" ){
				$module =  "views/marca/editar.php";
		}


           if($enlaces =="ya" ){
				$module =  "views/modules/usuarios.php";
		}

                if($enlaces =="ok1" ){
				$module =  "views/categoria/editarCategoria.php";
		}

                if($enlaces =="ok2" ){
				$module =  "views/categoria/editar.php";
		}


        
               if($enlaces =="jean" ){
				$module =  "views/marca/editarMarca.php";

				
		}
		if($enlaces == "cambio"){

			$module =  "views/categoria/editarCategoria.php";
		
		}








		
		return $module;

	}

}

?>