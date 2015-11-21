<?php 
require_once("weapons.php");
 class Weapons{
 	private $armas= array();


 	function __construct()
 	{
 		//						  $capacidad $retroceso	$cadencia $nombre $calibre

 		//SNIPERS
 		$this->armas[]=new Weapon(11,1.0,36,"M98B",0.338);
 		$this->armas[]=new Weapon(11,1.0,42,"Scout Elite",0.45);
 		$this->armas[]=new Weapon(8,1.0,36,"SRR61 Intervention",0.408);
 		$this->armas[]=new Weapon(6,1.0,44,"GOL Magnum",0.338);
 		$this->armas[]=new Weapon(11,2.0,125,"M82A3",0.50);
 		$this->armas[]=new Weapon(11,1.0,43,"SV-98",0.45);
 		$this->armas[]=new Weapon(11,2.0,125,"M82A3",0.50);

 		//ASSAULT RIFLES
 		$this->armas[]=new Weapon(31,0.42,900,"AEK-971",0.45);
  		$this->armas[]=new Weapon(31,0.32,1200,"AN-94",0.45);
  		$this->armas[]=new Weapon(31,0.32,850,"F200",0.45);
  		$this->armas[]=new Weapon(26,0.4,1000,"FAMAS",0.45);
  		$this->armas[]=new Weapon(31,0.32,750,"M416",0.45);
  		$this->armas[]=new Weapon(21,0.5,620,"SCAR-H",0.51);
 		$this->armas[]=new Weapon(31,0.26,700,"AUG A3",0.45);

 		//SMGs
 		$this->armas[]=new Weapon(21,0.33,900,"AS VAL",0.39);
 		$this->armas[]=new Weapon(31,0.38,900,"JS2",0.19);
 		$this->armas[]=new Weapon(31,0.26,750,"PDW-R",0.45);
 		$this->armas[]=new Weapon(41,0.35,950,"MP7",0.30);
 		$this->armas[]=new Weapon(51,0.32,900,"P90",0.28);
 		$this->armas[]=new Weapon(26,0.38,600,"UMP 45",0.45);
 		$this->armas[]=new Weapon(45,0.24,650,"PP-2000",0.19);

 		//LMGs
 		$this->armas[]=new Weapon(100,0.48,650,"M240B",0.51);
 		$this->armas[]=new Weapon(100,0.43,600,"PKP Pecheneg",0.54);
 		$this->armas[]=new Weapon(61,0.27,600,"RPK-12",0.45);
 		$this->armas[]=new Weapon(31,0.29,700,"L86A1",0.45);

 		//Sidearms
 		$this->armas[]=new Weapon(9,2.0,220,"Deagle 44",0.44);
 		$this->armas[]=new Weapon(6,2.0,150,"Magnum 44",0.44);
 		$this->armas[]=new Weapon(8,0.6,310,"M1911",0.39);
 		$this->armas[]=new Weapon(16,0.45,400,"M9",0.09);
 		$this->armas[]=new Weapon(6,2.0,180,"MP412 REX",0.357);


 	}

 	function metodos_ordenacion(){
		$metodos=array();
		$metodos["nombre"]=array("true","true");
		$metodos["retroceso"]=array("true","true");
		$metodos["capacidad"]=array("true","true");
		$metodos["cadencia"]=array("true","true");
		$metodos["calibre"]=array("true","true");
		return $metodos;
	}

	function ordenar($ord, $function) {
	 	if($function!="nada"){
		 	for ($i=1; $i < count($this->armas); $i++) {
			 	for ($j=0; $j < count($this->armas)-$i; $j++) {
				 	if ($ord=="ascendente"?($this->armas[$j]->$function() > $this->armas[$j+1]->$function()):($this->armas[$j]->$function() < $this->armas[$j+1]->$function())) {
					 	$aux=$this->armas[$j];
					 	$this->armas[$j]=$this->armas[$j+1];
					 	$this->armas[$j+1]=$aux;
				 	}
			 	}
		 	}
	 	}
	 	return $this->armas;
 	}
 } ?>