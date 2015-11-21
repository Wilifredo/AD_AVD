<?php 
	function mostrar_tabla($arr){
		$salida="<table><tr><th>Nombre</th><th>Capacidad</th><th>Calibre</th><th>Retroceso</th><th>Cadencia</th></tr>";
		foreach ($arr as $key => $value) {
			$salida.="<tr><td><center>".$value->get_nombre()."</center></td><td><center>".$value->get_capacidad()."</center></td><td><center>".$value->get_calibre()."</center></td><td><center>".$value->get_retroceso()."</center></td><td><center>".$value->get_cadencia()."</center></td></tr>";
		}
		$salida.="</table>";
		return $salida;
	}

?>