<h2>Zeit ist Gold</h2>  
<?php 
echo '<h3>Time</h3>';
echo time();
echo '<hr class="bg-light py-1">';

echo '<h3>Date</h3>';
echo date('n');
echo '<hr class="bg-light py-1">';

echo '<h3>Monat in Deutsch</h3>';
$months = array(
    1 => 'Januar',
    2 => 'Februar',
    3 => 'März',
    4 => 'April',
    5 => 'Mai',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'August',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Dezember'
);
echo $months[date('n')];

echo '<hr class="bg-light py-1">';


echo '<h3>Tage in Deutsch</h3>';
$tage = array(
    'Sonntag',
    'Montag',
    'Dienstag',
    'Mittwoch',
    'Donnerstag',
    'Freitag',
    'Samstag'
);

echo $tage[date('w')];
echo '<hr class="bg-light py-1">';

echo '<h3>Date time</h3>';
echo '<p>la fx time retourne le timestamp de maintenant!</p>';
echo date('d.m.Y', time() + (60*60*24));
echo '<hr class="bg-light py-1">';

echo '<h3>mk time : Geburstag</h3>';
#mktime(hour,min,sec,month,day,year)
$geboren = mktime(18,23,0,3,1,2000);
$differenz = (time() - $geboren);

echo 'Maria ist ' . $geboren. ' sec Jung <br>'; 
echo 'Das beudeutet, sie ist ' . floor($geboren/(60*60*24*365)). ' j Jung.';
echo '<hr class="bg-light py-1">';

echo '<h3>Wann ist die nächste Geburstag</h3>';
$geb = mktime(0,0,0,8,6,2023);
$diff =($geb - time()) / (60 * 60 * 24);
echo 'Marias nächste geburstag ist in ' . floor($diff). ' Tage <br>'; 


?>
