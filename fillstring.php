<?php
	$im = imagecreate(150, 150);

	$bg = imagecolorallocate($im, 255, 255, 255);
	$black = imagecolorallocate($im, 0, 0, 0);
	
	$string = "hello kitty";

	imageString($im, 3, 28, 70, $string, $black);
	imageStringUp($im, 3, 59, 115, $string, $black);
	
	for($i=0;$j=strlen($string); $i<strlen($string); $i++,$j--){
		imageChar($im, 3, 10*($i+1), 10*($i+2), $string[$i], $black);
		imageCharUp($im, 3, 10*($i+1), 10*($i+2), $string[$i], $black);
	}

	header('Content-type: image/png');
	imagepng($im);
?>
