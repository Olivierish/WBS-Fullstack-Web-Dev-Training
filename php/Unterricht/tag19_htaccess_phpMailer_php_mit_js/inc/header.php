<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>Projekt <?php pageTitle();?></title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css" />
	<link rel="stylesheet" href="../fontawesome/css/all.css" />
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script src="./js/master.js"></script>
	<link  rel="stylesheet" href="css/styles.css" />
</head>
<body class="bg-secondary">
<div class="container bg-light">
<header class="row" id="header">
<div class="col-12 text-light header py-2">
	<h1 class="display-2 text-center">design follows PHP</h1>
</div>
<div class="col-12 main-menue">
	<nav class="navbar navbar-expand navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link <?php echo empty($page) ? 'active fw-bold' : ''; ?>">Home</a>   
			</li>
			<li class="nav-item">
				<a href="index.php?page=about" class="nav-link <?= ($page === 'about') ? 'active fw-bold' : ''; ?>">About</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=entries" class="nav-link <?= ($page === 'entries') ? 'active fw-bold' : ''; ?>">Gästebuch</a>
			</li>
      <li class="nav-item">
				<a href="index.php?page=kontakt" class="nav-link <?= ($page === 'kontakt') ? 'active fw-bold' : ''; ?>">Kontakt</a>
			</li>
		</ul>
	</nav>
</div>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++-->
<div  class="row user-menue p-2 m-0">
<?php if(!isset($_SESSION['id']) && !isset($_SESSION['login'])):?>
<div class="col-md-8">
 <form action="auth/user/login.php" method="POST" class="row p-0 m-0">
		<div class="col-md-4 p-1">
			<input type="text" class="form-control" name="mail" placeholder="E-Mail..." />
		</div>
		<div class="col-md-4 p-1">
			<input type="password" class="form-control" name="pwd" placeholder="Password..." />
		</div>
		<div class="col-md-3 p-1">
			<button type="submit" class="btn sub-send">Login</button>
		</div>
		<input type="hidden"  name="csrf_token" value="<?= csrf_token();?>" />
 </form>
</div>
<div class="col-12 my-1 py-1" ><a href="?page=register" class="badge bg-primary p-2 fs-6">Registrierung</a></div>
<?php else:?>
<div class="col-12">
<h3>Hallo <?= $_SESSION['vorname'] ?></h3>
<ul class="nav">
	<li class="nav-item m-1">
		<a href="index.php?page=profil" 
				class="nav-link btn btn-primary text-light <?= ($page === 'profil') ? 'active fw-bold border-light' : ''; ?>">Mein Profil</a>
	</li>
	<li class="nav-item m-1">
		<a href="auth/user/logout.php" class="nav-link btn btn-danger text-light">Logout</a>
	</li>
</ul>
</div>
<?php endif;?>
</div>
<!--+++++++++++++++++++++++++++++++++++++++++++++++++-->
</header>
</div>
<main class="container-fluid bg-dark bg-opacity-75 p-2 p-md-5 my-0 text-light">
<?php if(isset($_SESSION['msg'])):?>
<div class="container p-0">
	<p class="alert alert-primary fs-3 d-inline-block"><?= nl2br($_SESSION['msg'])?></p>
</div>
<?php endif;?>




