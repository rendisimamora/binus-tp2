<?php
	session_start();
	header("Content-type: image/png");
	$_SESSION["Captcha"]="";
 
	// Size Captcha
	$image	= imagecreate(200, 50);

	//Background Captcha
	imagecolorallocate($image, 30, 144, 255);
 
	$color	= imagecolorallocate($image, 253, 252, 252);
	$font	= "../assets/fonts/blackjack.otf"; 
	$fontSize = 20;
	$position = 32;
	
	// Number Random Captcha
	for($i=0;$i<=5;$i++) {
		// Length Character
		$numberCaptcha=rand(0, 9);
		$_SESSION["Captcha"].=$numberCaptcha;
		$layout= rand(20, 30);
		imagettftext($image, $fontSize, $layout, 8+15*$i, $position, $color, $font, $numberCaptcha);	
	}
	
	//Generate Image
	imagepng($image); 
	imagedestroy($image);
?>