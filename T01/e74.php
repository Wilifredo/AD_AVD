<html>
<body>
<p><u><b>
Numero aleatoria entre 1 y 100,ambos inclusive
</b></u></p>

<h1>
<?php
$nombre = "random";

$random = rand(1,100);

echo printf("%d,%b,%o,%x",$random,$random,$random,$random);
?>
</h1>
</body>
</html>
