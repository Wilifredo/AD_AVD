<?php
$palabra= "Retamar";
$aleat=rand(0,strlen($palabra)-1);
?>
<html>
<head>
	<title>68.php</title>
</head>
<body>
<p><?php printf("Una letra aleatoria de la palabra %s es %s",$palabra , $palabra[$aleat]);?></p>
</body>
</html>