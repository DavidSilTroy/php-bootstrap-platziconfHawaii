<?php
class EnlacesPaginas{
	public function EnlacesPaginasModel($enlacesModel){
		if($enlacesModel== "nosotros" || $enlacesModel== "contactenos" || $enlacesModel== "servicios" || $enlacesModel== "inicio" ){
			$module = "views/modules/".$enlacesModel.".php";
		}
		else{
			$module = "views/modules/inicio.php";
		}
		return $module;
	}
}

?>