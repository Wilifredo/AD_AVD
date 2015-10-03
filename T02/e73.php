<?php
$aleat="0123456789abc.";
$cadena1="";
$cadena2="";


for($i=0;$i<5;$i++){
	$cadena1=$cadena1.$aleat[rand(0,13)];
	$cadena2=$cadena2.$aleat[rand(0,13)];
}

printf("<p>La cadena entera <b>%s</b> se convierte al entero <b>%d</b></p>",$cadena1,$cadena1);
printf("<p>La cadena real <b>%s</b> se convierte al real <b>%f</b></p>",$cadena2,$cadena2);

?>