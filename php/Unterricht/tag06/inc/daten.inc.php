<?php 
    function gruss($value){
        echo $value;
    }
    gruss('Max');
    echo '<br/>';
    gruss('Tom');
    echo '<br/>';
    gruss('Jerry');
    echo '<br/>';
?>
<h2>Funktionen sind wichtig</h2>   

<?php 
    function ausgabe($value){
        return $value;
    }

    ausgabe('Anna');
    echo '<br/>';

?>
<h2>Gültigkeit</h2>   

<?php 
$foo = 'Hugo';
echo '<br>';
function daten(){
       $fara = '';
       echo $fara;   
    }

    #global $foo
    #echo $foo



    daten();

?>

<h2>Konstanten</h2>   

<?php 
define('PFAD','images/');

echo PFAD;

const PI = 3.14; 

?>

<h2>Typisierung</h2>   

<?php 
function greeting(string $name, int $age, string $city){
    return $name. ' ' .$age. ' ' .$city;
}
echo greeting('Anna', 25, 'Paris');


function rechner(int $a, int $b){
    return $a + $b;
}
echo '<br>';

function rechner2(int $a, int $b):int{
    return ($a + $b);
}
?>

