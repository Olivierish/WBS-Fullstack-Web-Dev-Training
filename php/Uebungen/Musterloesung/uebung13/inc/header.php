<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8" />
	<title>myBlog <?php pageTitle();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
	<link  rel="stylesheet" href="./css/styles.css" />
</head>
<body class="bg-secondary">
<div class="container bg-light">
<header class="row" id="header">
<div class="col-12 bg-danger bg-opacity-75 text-light">
	<h1 class="display-2 text-center">PHP -  MYSQL</h1>
</div>
<div class="col-12 bg-dark">
	<nav class="navbar navbar-expand navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="index.php" class="nav-link <?php echo empty($page) ? 'current' : ''; ?>">Home</a>   
			</li>
			<li class="nav-item">
				<a href="index.php?page=about" class="nav-link <?= ($page === 'about') ? 'current' : ''; ?>">About</a>
			</li>
			<li class="nav-item">
				<a href="index.php?page=guestbook" class="nav-link <?= ($page === 'guestbook') ? 'current' : ''; ?>">Gästebuch</a>
			</li>
		</ul>
	</nav>
</div>
</header>
<main class="row p-2">