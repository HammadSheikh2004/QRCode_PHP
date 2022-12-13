<?php

include 'phpqrcode/qrlib.php';

$text = "https://unsplash.com/photos/kmmTEBe5ZIs";

$location = "ImageSaver/";
$path = $location.uniqid().".png";
$ecc = 'L';
$pixel_size = 10;
$frame_size = 10;

QRcode :: png($text,$path,$ecc,$pixel_size,$frame_size);

echo "<img src = '$path'>";

?>