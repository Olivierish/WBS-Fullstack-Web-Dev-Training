<?php 

session_start();

$laenge = 6;
$text = '';

for($i = 0; $i < $laenge; $i++) {
  $text .= chr(rand(97,122));
}

#echo $text;

$_SESSION['code'] = $text;

$bilder = ['../images/img-1.jpg','../images/img-2.jpg','../images/img-3.jpg','../images/img-4.jpg'];

$img = imagecreatefromjpeg( $bilder[rand(0,3)]);
/*
imagecolorallocate — Alloziert eine Farbe für eine Grafik
 imagecolorallocate(
    GdImage $image,
    int $red,
    int $green,
    int $blue
): int|false
*/
$textColor = imagecolorallocate($img, 20, 20, 50);
/*
imagestring — Zeichnet einen horizontalen String
 imagestring(
    GdImage $image,
    GdFont|int $font,
    int $x,
    int $y,
    string $string,
    int $color
): bool
*/
imagestring($img, 5, 35, 15, $text, $textColor);

header('Content-type: image/jpeg');
/*
imagescale — Scale an image using the given new width and height
*/
$imgScal = imagescale($img, 200, 80);

imagejpeg($imgScal);

imagedestroy($imgScal);