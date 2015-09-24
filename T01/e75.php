<html>
<body>
<p><u><b>
Numero aleatoria entre 1 y 100,ambos inclusive
</b></u></p>

<?php
$nombre = "random";

$random = rand(1,100);
?>

<input type="textbox" style="border-size:1px;width:20px;border-color:red;text-align:center;background-color:aqua;color:green" readonly value=<?php echo $random;?> >
</input>
</body>
</html>