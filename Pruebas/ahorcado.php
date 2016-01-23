<?php 

$diccionario=array("libro","mesa","cuadrado","silla","programacion","pantalla","mando","plato","queso");
if(!isset($_POST["Intentar"])){
	$guess=$diccionario[rand(0,count($diccionario)-1)];
	for($i=0; $i<strlen($guess);$i++){
		$palabra[]=md5($guess[$i]);
	}
	$fallos=6;
}
else{
	$palabra=$_POST["letra_guess"];
	$letra=$_POST["letra"];
	$fallos=$_POST["fallos"];
	if(comprobacion($palabra,$letra)){
		
	}
}




?>

<form method="post" action="ahorcado.php">
	<?php for($i=0; $i<count($palabra);$i++){ ?>
		<input type="text" maxlength="1" size="1" name="letra_guess[]" readonly value="<?=$palabra[$i]?>" hidden/>
		<input type="text" maxlength="1" size="1" name="letra[]" readonly/>
	<?php }?>
	<input type="number" name="fallos" hidden value="<?=$fallos?>"/>
	<p>Adivine la palabra, tiene <?=$fallos?> fallos para lograrlo</p>
	<input type="text" maxlength="1" size="1" name="intento"/>
	<input type="submit" value="Intentar" name="Intentar"/> 
</form>