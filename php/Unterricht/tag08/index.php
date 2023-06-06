<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" /> 
	<title>php</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" /> -->
	<link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">

</head>
<body class="bg-dark bg-opacity-75">
<div class="container bg-light">
<header class="row bg-warning">
	<div class="col-12 p-2">
		<h1 class="display-1">design follows function</h1>
	</div>
</header>
<main class="row p-2">
<?php 
$zahlen = [[1,2,3,4], [5,6,7,8,10], [33,44,55]];

echo '<h2>For Schleife</h2>';

// Loop through the rows
for ($i = 0; $i < count($zahlen); $i++) {
	echo '<p>';
    // Loop through the columns within each row
    for ($j = 0; $j < count($zahlen[$i]); $j++) {
        echo $zahlen[$i][$j] . ' ';
    }
    echo "</p>";
}

echo '<h2>Foreach Schleife</h2>';
// Loop through the rows
foreach ($zahlen as $row) {
	echo '<p>';
    // Loop through the columns within each row
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "</p>";
}
##########################################
echo '<h2>In Array suchen</h2>';
$euroCities = array(
    "Paris", "London", "Rome", "Berlin", "Madrid", "Vienna", "Amsterdam", "Lisbon", "Athens", "Dublin",
    "Prague", "Stockholm", "Warsaw", "Budapest", "Brussels", "Copenhagen", "Helsinki", "Oslo", "Ljubljana",
    "Zagreb", "Bratislava", "Bucharest", "Sofia", "Belgrade", "Moscow", "Kiev", "Minsk", "Sarajevo",
    "Skopje", "Tirana", "Valletta", "Reykjavik", "Tallinn", "Vilnius", "Riga", "Nicosia", "Luxembourg City",
    "Bern", "Vatican City", "Monaco", "Andorra la Vella"
);
?>

<ul>
	<?php foreach ($euroCities as $value):?>
		<?php if( $value[0] === 'P'): ?>
			<li><?= $value; ?></li>
		<?php endif; ?>
	<?php endforeach;?>
</ul>

<h2>In Array suchen</h2>

<form action="<?= $_SERVER["PHP_SELF"];?>" method="get">
<div class="p-1">
	<input type="text" name="name" class="form-control" />
</div>
<input type="submit" value="Info zeigen" name="btn" class="btn btn-success fw-bold my-1" />
</form>

<?php 
function sauberHTML($html){
	return htmlentities($html, ENT_QUOTES, 'UTF-8');
}
// echo '<h1>' .sauberHTML($_GET['name']). '</h1>';
?>

<!--#############################################-->
<form action="<?php $_SERVER["PHP_SELF"];?>" method="get">
<div class="p-1">
	<select name="city">
		<option value="hamburg">Hamburg</option>
		<option value="helgoland">Helgoland</option>
		<option value="rotterdam">Rotterdam</option>
	</select>
</div>
<input type="submit" value="Info zeigen" name="cityBtn" class="btn btn-success fw-bold my-1" />
</form>
<?php 
if (!empty($_GET['city'])) {
	// include "pages/{$_GET['city']}.inc.html";
	echo file_get_contents("pages/{$_GET['city']}.inc.html");
}
?>
<h2>Seiten besser organisieren</h2>
<?php 
$staedte = [
	'hamburg' => 'Hansestadt Hamburg',
	'helgoland' => 'Hochseeinsel Helgoland',
	'rotterdam' => 'Rotterdam (NL)'
];
?>
<!--##############################################-->
<form action="<?php $_SERVER["PHP_SELF"];?>" method="get">
<div class="p-1">
	<select name="stadt">
		<?php foreach($staedte as $key => $value): ?>
			<option value="<?=$key?>"><?= $value ?></option>
		<?php endforeach; ?>
	</select>
</div>

<input type="submit" value="Info zeigen" class="btn btn-success fw-bold my-1" />
</form>
<?php 
if (!empty($_GET['stadt'])) {
	// include "pages/{$_GET['city']}.inc.html";
	echo file_get_contents("pages/{$_GET['stadt']}.inc.html");
}
?>
<!--##############################################-->
<h2>Ordner einlesen</h2>
<?php
echo __FILE__;
echo "<hr>";
echo __DIR__;
echo "<hr>";
echo __LINE__;
echo "<hr>";
echo dirname(__FILE__);
echo "<hr>";

$ordner = opendir(__DIR__.'/images');

$filename1 = readdir($ordner);
print_r($filename1);
echo "<br/>";
$filename2 = readdir($ordner);
print_r($filename2);
echo "<br/>";
$filename3 = readdir($ordner);
print_r($filename3);
echo "<br/>";
$filename4 = readdir($ordner);
print_r($filename4);
echo "<br/>";
$filename5 = readdir($ordner);
print_r($filename5);
echo "<br/>";
$filename6 = readdir($ordner);
var_dump($filename6);
echo "<br/>";
?>
<!--##############################################-->
<h2>Ordner einlesen (kein . und ..)</h2>
<?php 
$handle = opendir(__DIR__.'/images');
$filenames = [];
while(($filename = readdir($handle)) !== false){
	if($filename === '.' ||$filename === '..') continue;
	$filenames[] = $filename;

}
closedir($handle);
var_dump($filenames);
?>

<h2>Bilder anzeigen</h2>
<?php foreach ($filenames as $datei): ?>
	<img src="images/<?= $datei?>" class="img-fluid img-thumbnail mx-2" style="width:300px"/>
<?php endforeach; ?>
</main>
<footer class="row border-top">
	<div class="col-md-6">&copy; by design</div>
	<div class="col-md-6">TERMS AND CONDITIONS</div>
</footer>
</div>
</body>
</html>
