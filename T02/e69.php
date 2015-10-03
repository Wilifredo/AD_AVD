<?php
$real1=mt_rand() / mt_getrandmax();
$real2=-1000+mt_rand()/mt_getrandmax()*(1000+1000);
$real2round1=(int)($real2*1000)/1000;
$real2round2=(int)($real2/10)*10;


printf("<p><b>Numero real aleatorio entre 0 y 1: %f</b></p>", $real1);
printf("<p><b>Numero real aleatorio entre 0 y 1: %f</b></p>", $real2);
printf("<p><b>Segundo truncado a las milesimas: %.3f</b></p>",$real2round1);
printf("<p><b>Segundo truncado a las decenas: %d</b></p>",$real2round2);
?>