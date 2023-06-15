<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<!-- <title>Projekt <?php #pageTitle();?></title> -->
	<title>Projekt <?php pageTitle(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link  rel="stylesheet" href="../bootstrap/css/bootstrap.css" /> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link  rel="stylesheet" href="css/styles.css" />
	<style>
		h2{
			color: #7866F2;
		}
	</style>
</head>
<body class="bg-secondary">
<div class="container bg-light">
<header class="row" id="header">
<div class="col-12 bg-primary bg-opacity-75 text-light p-0">
	<!-- <h1 class="display-2 text-center">design follows PHP</h1> -->
		<!-- Jumbotron -->
<div class="jumbotron-fluid bg-image p-4" style="background: linear-gradient(86deg, rgba(33,37,41,1) 0%, rgba(255,255,255,0) 60%),url('images/bg.jpg'); background-size:cover;">
	<h1 class="display-3 text-light">Tag 14</h1>
	<p class="lead text-light">Database - Navigation - </p>
	<hr class="my-2">
	<p class="text-light">Mehr Infos</p>
	<p class="lead">
		<a class="btn btn-warning bg-opacity-50 btn-lg" href="https://docs.google.com/document/d/1WkD2JUawyo4EE0mUXZAutdMasZxmlPswxNYz__R6-7I/edit?usp=sharing" role="button">Kurs Docs</a>
	</p>
</div>
<!-- Jumbotron -->
</div>
<div class="col-12 bg-dark">
	<nav class="navbar navbar-expand navbar-dark">
	<ul class="navbar-nav">
			<li class="nav-item"> 
				<a href="index.php" class="nav-link <?php echo empty($page) ? 'active fw-bold' : '';?>">Home</a>   
			</li>
			<li class="nav-item">
				<a href="index.php?page=about" class="nav-link <?= ($page === 'about') ? 'active fw-bold' : '';?>">About</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=entries" class="nav-link <?= ($page === 'entries') ? 'active fw-bold' : '';?>">Gästebuch</a>
			</li>
      <li class="nav-item">
				<a href="index.php?page=kontakt" class="nav-link <?= ($page === 'kontakt') ? 'active fw-bold' : '';?>">Kontakt</a>
			</li>
		</ul>
	</nav>
</div>
</header>
<main class="row">
	<?php if(isset($_SESSION['msg'])):?>
	<div class="col-12 p-2">
		<p class="alert alert-primary"><?= $_SESSION['msg']?></p>
	</div>
<?php endif; ?>