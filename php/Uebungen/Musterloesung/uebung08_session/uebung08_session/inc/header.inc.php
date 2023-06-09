<!DOCTYPE html> 
<html lang="de">
<head>
	<title>php</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
<header>

<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="index.php?goto=info">Info</a></li>
	<?php if(isset($_SESSION["mail"])):?>
	<li><a href="index.php?goto=off">Logout</a></li>
	<?php else:?>
	<li><a href="index.php?goto=login">Login</a></li>
	<?php endif;?>
</ul>
<h3><?= isset($_SESSION["mail"]) ? ("Hallo ".($_SESSION["nn"])) : ''?></h3>
</header>

<main>