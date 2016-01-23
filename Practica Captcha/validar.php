<?php
	if(isset($_POST["Enviar"]))
		if($_POST["intento"]==$_POST["result"])
			header("Location: ok.php");
	else{
		echo "<h1 style='color: RED'>CAPTCHA INCORRECTO</h1>";
	}
	$captcha="";
	for($i=0;$i<5;$i++){
		switch(mt_rand(0,2)){
			case 0:
				$captcha.=chr(mt_rand(65,90));
				break;
			case 1:
				$captcha.=chr(mt_rand(97,122));
				break;
			case 2:
				$captcha.=chr(mt_rand(48,57));
				break;
		}
	}
?>

<html>
<head>
	<title>Captcha</title>
</head>
<body>
	<img src="captcha.php?result=<?=$captcha?>"></img>
	<form action="validar.php" method="POST">
		<input type="text" hidden name="result" value="<?=$captcha?>"/>
		<input type="text" name="intento" size="5"/>
		<input type="submit" name="Enviar" value="Enviar"/>
	</form>
</body>
</html>