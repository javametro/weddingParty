<?php
	$im = imagecreatetruecolor(400, 30);
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 128, 128, 128);
	$black = imagecolorallocate($im, 0, 0, 0);

	imagefilledrectangle($im, 0, 0, 399, 29, $white);
	
	$text = iconv("GB2312", "UTF-8", "祝你生日快乐");

	$font = 'simsun.ttc';
	
	imagettftext($im, 20, 0, 12, 21, $grey, $font, $text);
	imagettftext($im, 20, 0, 10, 20, $black, $font, $text);

	header("Content-type: image/png");
	imagepng($im);
	
	imagedestroy($im);
	
?>
