<?php
for($i=0;$i<100;$i++)
	$numeros[]=rand(0,100);

var_dump($numeros);
printf ("<br><br>");
for($i=1;$i<count($numeros);$i++)
	for($j=0;$j<count($numeros)-$i;$j++)
		if($numeros[$j]>$numeros[$j+1]){
			$aux=$numeros[$j];
			$numeros[$j]=$numeros[$j+1];
			$numeros[$j+1]=$aux;
		}
var_dump($numeros);
?>