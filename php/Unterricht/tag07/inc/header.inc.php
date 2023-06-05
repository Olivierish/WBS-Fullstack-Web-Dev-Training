<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" /> 
	<title>php</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" /> -->
	<link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
	<style>
		#promo {
  			background-image: 
    		/* top image*/
    		linear-gradient(to right, rgba(0, 0, 0, 0.8) 20%, rgba(51, 51, 51, 0.6) 86%, rgba(51, 51, 51, 0.8) 100%),
    		/*bottom image*/
    		url(images/bg.png);
  			/* height: 500px; */
			background-size: 100% 100%;
  			color: white;
			}
	</style>
</head>
<body class="bg-dark bg-opacity-75">
<div class="container bg-light">
		<!-- Jumbotron -->
<!-- <div class="jumbotron-fluid bg-image p-4" style="background-image: url('images/bg.png'); background-size:100% 100%;"> -->
<div class="jumbotron-fluid bg-image p-4" id="promo">
	<h1 class="display-3 text-light">Tag 07</h1>
	<p class="lead text-light">Sessions</p>
	<hr class="my-2">
	<p class="text-light">More info</p>
	<p class="lead">
		<a class="btn btn-primary btn-lg" href="https://docs.google.com/document/d/1OOAQez0ShZw4g9zF16ZrfGSh-7hIyYQ1O0e9mGKRxsw/edit?usp=sharing" role="button">Kurs Docs</a>
	</p>
</div>
<!-- Jumbotron -->
<header class="row bg-dark p-0">
	<div class="col-md-8">
		<nav class="navbar navbar-expand navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link">Home</a>   
			</li>
			<li class="nav-item">
				<a href="index.php?page=daten" class="nav-link">Daten</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=register" class="nav-link">Registrierung</a>
			</li>
		</ul>
		</nav>
	</div>
	<!--++++++-->
	<div class="col-md-4 p-1">
		<?php 
			if(isset($_SESSION['m'])):
				echo '<p class="text-light fs-2">Hallo '.$_SESSION['nn'].', '.$_SESSION['vn'].'</p>';
				echo '<p><a href="inc/logout.php" class="btn btn-warning btn-sm text-light">Logout</a></p>';
			else : 
		?>
		<form class="bg-light p-2" action="inc/login.php" method="post">
			<input type="text" name="nachname" placeholder="Bitte Name eingeben" />
			<input type="text" name="vorname" placeholder="Bitte Vorname eingeben" />
			<input type="text" name="mail" placeholder="Bitte E-Mail eingeben" />
			<input type="submit"  value="einloggen" class="btn btn-success w-100 my-1" />
		</form>
		<?php endif; ?>		
		
		<?php 
		if(isset($_GET['msg'])):
			if($_GET['msg'] == 'errorNN'){
				echo '<p class="bg-light text-danger p-1">Nachname darf nur Buchstaben haben</p>';
			} else if($_GET['msg'] == 'errorVN'){
				echo '<p class="bg-light text-danger p-1">Vorname darf nur Buchstaben haben</p>';
			}else if($_GET['msg'] == 'errorM'){
				echo '<p class="bg-light text-danger p-1">Mail: test@test.de</p>';
			}else if($_GET['msg'] == 'off'){
				echo '<p class="bg-light text-danger p-1">Logout erfolgreich!</p>';
			}
		endif; #end isset
		?>

	</div>
</header>
<main class="row p-2">

 
