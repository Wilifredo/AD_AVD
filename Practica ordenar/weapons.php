<?php 
/**
* 
*/
class Weapon{
	
	private $capacidad;
	private $retroceso;
	private $cadencia;
	private $nombre;
	private $calibre;


	function __construct($capacidad, $retroceso, $cadencia, $nombre, $calibre){
		$this->capacidad=$capacidad;
		$this->retroceso=$retroceso;
		$this->cadencia=$cadencia;
		$this->nombre=$nombre;
		$this->calibre=$calibre;
	}

	function get_capacidad(){
		return $this->capacidad;
	}
	function get_calibre(){
		return $this->calibre;
	}
	function get_retroceso(){
		return $this->retroceso;
	}
	function get_cadencia(){
		return $this->cadencia;
	}
	function get_nombre(){
		return $this->nombre;
	}

}
 ?>