<?php
 class mvcController{
	#LLAMADA A LA PLANTILLA
	#-----------------------------------------------------
	public function plantilla(){
		# code...
		#include() se utiliza para invocar el archivo que contiene codigo html
		include "views/template.php";
	}
	#INTERACCION DE USUARIO
	#-----------------------------------------------------
	public function enlacesPaginasController(){
		
		if(isset($_GET["action"])){
			$enlacesController = $_GET["action"];	
			$respuesta = EnlacesPaginas::EnlacesPaginasModel($enlacesController);
		}
		else{
			$respuesta = "views/modules/inicio.php";
		}
		#echo $enlacesController;		
		include $respuesta;
	}
}
?>