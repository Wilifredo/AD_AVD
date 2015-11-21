<?php 
	require_once("armas.php");

	$arr=new Weapons();

	//var_dump($arr->metodos_ordenacion());

	if(!isset($_GET["ord"]))
		$_GET["ord"]="ascendente";
	if(!isset($_GET["campo"]))
		$_GET["campo"]="nada";
	else if($_GET["campo"]=="nombre")
		$_GET["campo"]="get_nombre";
	else if($_GET["campo"]=="calibre")
		$_GET["campo"]="get_calibre";
	else if($_GET["campo"]=="retroceso")
		$_GET["campo"]="get_retroceso";
	else if($_GET["campo"]=="capacidad")
		$_GET["campo"]="get_capacidad";
	else if($_GET["campo"]=="cadencia")
		$_GET["campo"]="get_cadencia";
	else
		$_GET["campo"]="nada";

	$salida=$arr->ordenar($_GET["ord"],$_GET["campo"]);

	if(!isset($_GET["view"]))
		echo "No existe la vista o no se ha introducido la vista";
	else if($_GET["view"]=="tabla"){
		require_once("table_view.php");
		echo mostrar_tabla($salida);
	}
	else if($_GET["view"]=="json"){
		require_once("json_view.php");
		echo mostrar_json($salida);
	}
	else
		echo "No existe la vista o no se ha introducido la vista";

 ?>