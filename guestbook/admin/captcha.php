<?php
session_start();
$str = md5(crypt("yhswgfyu"));
$captcha = substr($str, 0,6);
$_SESSION['captcha'] = $captcha;
$img = imagecreate(55, 35);
$bg = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 250, 0, 0);
imagestring($img, 5, 10, 10, "$captcha", $red);
header("Content-type:image/gif");
imagegif($img);
?>