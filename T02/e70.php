<?php
$real1=-100+mt_rand()/mt_getrandmax()*(100+100);
$real2=1+mt_rand()/mt_getrandmax()*(100-1);



printf("<p><b>%f + %f = %f</b></p>",$real1, $real2,$real1+$real2);
printf("<p><b>%f - %f = %f</b></p>",$real1, $real2,$real1-$real2);
printf("<p><b>%f * %f = %f</b></p>",$real1, $real2,$real1*$real2);
printf("<p><b>%f / %f = %f</b></p>",$real1, $real2,$real1/$real2);
printf("<p><b>%f % %f = %f</b></p>",$real1, $real2,$real1%$real2);
printf("<p><b>El opuesto de %f es %f</b></p>", $real1, -$real1);
printf("<p><b>%f++ vale %f</b></p>", $real1++, $real1--);
printf("<p><b>%f-- vale %f</b></p>",$real1, --$real1);

?>