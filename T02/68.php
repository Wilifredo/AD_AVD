<?php
$num1=rand(-100,100);
$num2=rand(1,100);
?>
<html>
<head>
	<title>68.php</title>
</head>
<body>
<p><?php printf("%d + %d = %d\n\n",$num1, $num2, ($num1+$num2));?></p>
<p><?php printf("%d - %d = %d\n\n",$num1, $num2, ($num1-$num2));?></p>
<p><?php printf("%d * %d = %d\n\n",$num1, $num2, ($num1*$num2));?></p>
<p><?php printf("%d / %d = %f\n\n",$num1, $num2, ($num1/$num2));?></p>
<p><?php printf("%d % %d = %d\n\n",$num1, $num2, ($num1%$num2));?></p>
<p><?php printf("El opuesto de %d es %d\n\n",$num1, -$num1);?></p>
<p><?php printf("%d++ vale %d\n\n",$num1, ($num1)+1);?></p>
<p><?php printf("%d-- vale %d\n\n",$num1, ($num1)-1);?></p>
</body>
</html>