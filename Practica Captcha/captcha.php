<?php 
	header("Content-type: image/png");
	$result=$_GET["result"];
	$return=imagecreate(300,100) or die ("No GD library");
	$R=mt_rand(0,255);
	$G=mt_rand(0,255);
	$B=mt_rand(0,255);
	$background_color=imagecolorallocate($return, $R, $G, $B);
	imagefill($return, 0, 0, $background_color);
	$letter_color=imagecolorallocate($return, (255-$R), (255-$G), (255-$B));
	$lineas=mt_rand(3,10);
	$fonts=array("fonts/A.ttf","fonts/B.ttf","fonts/C.ttf","fonts/D.ttf","fonts/E.ttf","fonts/F.ttf");

	for($i=0;$i<strlen($result);$i++){
		imagettftext($return, 30, mt_rand(-30,30), (40+$i*40), mt_rand(40,60), $letter_color, $fonts[mt_rand(0,count($fonts)-1)], $result[$i]);
	}
	imagesetthickness($return, 2);
	for($i=0;$i<$lineas/2;$i++)
		imageline($return, mt_rand(0,300), 0, mt_rand(0,300), 100, imagecolorallocate($return, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255)));
	for($i=$lineas/2+1;$i<$lineas;$i++)
		imageline($return, 0, mt_rand(0,100), 300, mt_rand(0,100), imagecolorallocate($return, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255)));
	imagepng($return);
	imagedestroy($return);
 ?>