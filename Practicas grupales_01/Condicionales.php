

<!DOCTYPE html>
<html>
<head>
	<title>Practica 1</title>
</head>
<body>
	<?php 
		$a = mt_rand(1,9);
		$b = mt_rand(1,9);
		$c = mt_rand(1,9);
		echo $a, $b, $c."<br/>";
		
		if($a > $b)
		{
			if($a > $c)
			{
				if($b > $c)
				{
					echo $a.", ".$b.", ".$c;
				}
				else
				{
					echo $a.", ".$c.", ".$b;
				}
			}
			else
				echo $c.", ".$a.", ".$b;
		}
		else if($b > $a)
		{
			if($b > $c)
			{
				if($a > $c)
				{
					echo $b.", ".$a.", ".$c;
				}
				else
				{
					echo $b.", ".$c.", ".$a;
				}
			}
			else
				echo $c.", ".$b.", ".$a;
		}
		else if($c > $a)
		{
			if($c > $b)
			{
				if($a > $b)
				{
					echo $c.", ".$a.", ".$b;
				}
				else
				{
					echo $c.", ".$b.", ".$a;
				}
			}
		}
		else
			echo $a.", ".$b.", ".$c;

	?>
</body>
</html>