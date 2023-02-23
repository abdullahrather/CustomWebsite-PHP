<?php
session_start();

// generate random alphanumeric code
$captcha_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyz"), 0, 6);

// save code in session variable
$_SESSION['captcha_code'] = $captcha_code;

// create image with code
$image = imagecreatetruecolor(100, 30);
$bg_color = imagecolorallocate($image, 1, 155, 214);
$text_color = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, 100, 30, $bg_color);
imagestring($image, 5, 20, 5, $captcha_code, $text_color);
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);

// Unset the CAPTCHA code from the session
// unset($_SESSION['captcha_code']);
?>
