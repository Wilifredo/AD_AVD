<?php 
	function mostrar_json($arr){
		$salida="{armas:[";
		foreach ($arr as $key => $value) {
			$salida.="{nombre:\"".$value->get_nombre()."\",capacidad:".$value->get_capacidad().",calibre:".$value->get_calibre().",retroceso:".$value->get_retroceso().",cadencia:".$value->get_cadencia()."}";
			if($key!=array_keys($arr)[count($arr)-1])
				$salida.=",";
		}
		$salida.="]}";
		return $salida;
	}
 ?>