<?php
	header('content-type:image/gif');
	$img= imagecreate(300,200);
	imagecolorallocate($img, rand(0,999),rand(0,999), rand(0,999));
	$white= imagecolorallocate($img,255,255,255);
	// for ($i=1; $i <100 ; $i++) { 
	// 	imagesetpixel($img, rand(0,200),rand(0,200),$white); 
	// }
	// imageline($img, 0, 0, 300, 200, $white);
	// imageline($img,2,2,100,200,$white);
	$char = 'a';
	imagchar($img,4,200,200,$char,$white);
	$char = 'b';
	imagecharup($img,4,100,100,$char,$white);
	imagegif($img,'./images/color.png');

?>