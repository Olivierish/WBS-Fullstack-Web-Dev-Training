<!DOCTYPE html> 
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>php</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" /> -->
	<link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">

</head>
<body class="bg-secondary">
<div class="container bg-light">
<header class="col-12 bg-dark">
<nav class="navbar navbar-dark navbar-expand">
<ul class="navbar-nav nav-tabs m-2">
	<li class="nav-item">
		<a href="index.php" class="nav-link <?= empty($page)? 'text-white' : ''; ?>">Home</a>
	</li>
	<li class="nav-item">
		<a href="index.php?page=about" class="nav-link <?= ($page === 'about')? 'text-white' : ''; ?>">About</a>
	</li>
	<li class="nav-item">
		<a href="index.php?page=referenzen" class="nav-link <?= ($page === 'referenzen')? 'text-white' : ''; ?>">Referenzen</a>
	</li>
	<li class="nav-item">
		<a href="index.php?page=kontakt" class="nav-link <?php echo($page === 'kontakt')? 'text-white' : ''; ?>">Kontakt</a>
	</li>	
</ul>
</nav>
</header>
<main class="row p-2">


