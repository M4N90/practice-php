<?php
	$width = 60;
	$height = 60;
	$img = imagecreate($width,$height);
	imagecolorallocate($img,131,215,67);
	$white = imagecolorallocate($img,255,255,255);

    for($i=0;$i<3;$i++)
    {
    imageline($img, mt_rand(10,40), mt_rand(10,40), mt_rand(10,40), mt_rand(10,40),$white);
	}imagefontwidth
	;
	$font = 4;

	$fontWidth = ($font)
	$fontHeight = imagefontheight($font);
	$length = 5;
	$chars = randomStr($length);
	$x = ($width-$fontWidth*$length)/2;
	$y = ($height-$fontHeight)/2;
	imagestring($img,$font,$x,$y,$chars,$white);
	header('content-type:image/png');
	imagepng($img);
	imagedestroy($img);

	function randomStr($length=4)
	{
		$tempStr = "abcdefghijklmnopq1234567890ABCDEFGHIJKLMNOPQ";
		$tempStr = str_shuffle($tempStr);
		$randomStr = "";
		for ($i=1; $i<=$length ; $i++) 
		{ 
			$randomStr.=$tempStr[rand(0,strlen($tempStr)-1)];
		}
		return $randomStr;

	}
?>