<?php
$numeros =array(rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100),rand(1,100));
for($i=0;$i<count($numeros);$i++){
	printf("%d", $numeros[$i]);
	if($i<count($numeros)-1)
		printf(", ");
}

?>