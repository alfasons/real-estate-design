<?php
session_start();

// Configure CAPTCHA options
$captchaTextLength = 6;
$font = './font2/Roboto-Black.ttf'; // Specify the path to your font file.

// Generate the CAPTCHA text
$captchaText = substr(str_shuffle(md5(time())), 0, $captchaTextLength);

// Store the CAPTCHA text in the session
$_SESSION['captcha'] = $captchaText;

// Create the CAPTCHA image
$image = imagecreatetruecolor(120, 30);
$background = imagecolorallocate($image, 255, 255, 255); // white background
$foreColor = imagecolorallocate($image, 0, 0, 0); // black text

imagefilledrectangle($image, 0, 0, 120, 30, $background);
imagettftext($image, 20, 0, 10, 25, $foreColor, $font, $captchaText);

// Output the image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
