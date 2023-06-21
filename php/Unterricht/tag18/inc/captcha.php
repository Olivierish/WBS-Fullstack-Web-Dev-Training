<?php
session_start();

$laenge = 6; 
$text = '';

for ($i=0; $i < $laenge; $i++) { 
        $text .= chr(rand(97,122));
}

// echo $text;

$_SESSION['code'] = $text;

$bilder = [ '../images/img-1.jpg',
            '../images/img-2.jpg',
            '../images/img-3.jpg',
            '../images/img-4.jpg'];

$img = imagecreatefromjpeg($bilder[rand(0,3)]);
$textColor = imagecolorallocate($img, 20,20,50);

imagestring($img, 5, 35, 15, $text, $textColor);

header('content-type: image/jpeg');

$imgScal = imagescale($img, 200, 80);

imagejpeg($imgScal);

imagedestroy($imgScal);

?>