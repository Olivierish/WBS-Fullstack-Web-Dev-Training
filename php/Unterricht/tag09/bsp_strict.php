
<?php
echo  '<h2>Typumwandlung</h2>';

function summe(int $a, int $b):int{
    return $a +$b;
}
echo summe(2,4);

echo "<hr>";
#echo summe("2",4);
echo "<hr>";
echo summe(intval("5"),4);
echo "<hr>";

$daten = ['Ich bin am 10/22/1990 geboren',
                    'Der Black Friday war am 10/19/1987',
                    'Unser Autor wird am 01/11/2023 nach Europa reisen'
                ];
#                   $1       $2       $3
$formatSuche = '/(\d{2})\/(\d{2})\/(\d{4})/';
foreach ($daten as $value) {
    $neuFormat = preg_replace($formatSuche, '$2.$1.$3', $value);
    echo '<p>Neu Format: '.$neuFormat.'</p>';
}

                ?>