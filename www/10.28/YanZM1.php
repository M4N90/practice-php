<?php
	$length = 4;
	$codeStr = randomStr($length);

	$width = 60;
	$height = 60;
	$img = imagecreate($width,$height);


	$bgColor = imagecolorallocate($img,127,214,62);
	$codeColor = imagecolorallocate($img,255,255,255);
	imagefill($img,0,0,$bgColor);



	$font = 5;
	$fontWidth = imagefontwidth($font);
	$fontHeight = imagefontheight($font);
	$x = ($width-$fontWidth*$length)/2;
	$y = ($height-$fontHeight)/2;
	imagestring($img,$font,$x,$y,$codeStr,$codeColor);




	for ($i=0; $i <100 ; $i++) 
	{ 
		$pixelColor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imagesetpixel($img,mt_rand(1,$width-1),mt_rand(1,$height-1),$pixelColor);
	}


	for ($i=0; $i <6 ; $i++) 
	{ 
		$lineColor = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255))	# code...
	}
?>