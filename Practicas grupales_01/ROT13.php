<?php
	define ("ROT",13);
	$abecedario="abcdefghijklmnopqrstuvwxyz";
	$abecedarioM="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$cadena="hola que tal estas";
	$salida="";
	for($i=0;$i<strlen($cadena);$i++){
		if(ord($cadena[$i])>=ord("a") && ord($cadena[$i])<=ord("z"))
			$salida.=$abecedario[((ord($cadena[$i])-ord("a"))+ROT)%strlen($abecedario)];
		else if(ord($cadena[$i])>=ord("A") && ord($cadena[$i])<=ord("Z"))
			$salida.=$abecedarioM[((ord($cadena[$i])-ord("A"))+ROT)%strlen($abecedario)];
		else
			$salida.=$cadena[$i];
	}
	echo $salida;
?>