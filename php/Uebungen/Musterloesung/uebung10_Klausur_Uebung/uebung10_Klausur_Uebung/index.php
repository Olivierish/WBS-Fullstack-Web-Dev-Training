<?php
//in master stehen Funktionen für Datum, rechner
require_once './inc/master.inc.php';
$page = $_GET["page"] ?? '';
?>
<!DOCTYPE html>
<html lang="de"> 
<head>
	<title>PHP</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
</head>
<body class="bg-secondary">
<!--hauptContainer+++++++++++++++++++++++++++-->
<div class="container bg-light">
<!--headBereich++++++++++++++++++++++++++++++-->
<header class="row">
<div class="col-12 p-0">
	<h1 class="display-1">Design Blume</h1>
	<h3 class="p-2"><?php datum();?></h3>
<!--navigation+++++++++++++++++++++++++++++++-->
<nav class="navbar navbar-expand navbar-dark bg-dark">
	<ul class="navbar-nav m-1">
		<li class="nav-item">
			<a href="index.php" class="nav-link <?= activLink($page)?>">Home</a>
		</li>
		<li class="nav-item">
			<a href="index.php?page=kunden" class="nav-link <?= activLink($page, 'kunden');?>">Kunden</a>
		</li>
		<li class="nav-item">
			<a href="index.php?page=rechner" class="nav-link <?= activLink($page, 'rechner');?>">Rechner</a>
		</li>
		<li class="nav-item">
			<a href="index.php?page=reisen" class="nav-link <?= activLink($page, 'reisen');?>">Reisen</a>
		</li>
	</ul>
</nav>
</div>
</header>
<!--mainBereich++++++++++++++++++++++++++++++-->
<main class="row p-2">
<?php

if(isset($page))
{
	switch($page)
	{
		case "kunden": include 'inc/kunden.inc.php'; break;
		case "rechner": include 'inc/rechner.inc.php'; break;
		case "reisen": include 'inc/reisen.inc.php'; break;
		default: include 'inc/home.inc.php'; break;
	}

}

?>
</main><!--ende main-->

</div><!--ende container-->
</body>
</html>