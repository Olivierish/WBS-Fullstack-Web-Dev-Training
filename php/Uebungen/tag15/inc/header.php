<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

<title>Cocktails Blog <?php pageTitle() ?> - Tag 15 </title>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
<nav class="navbar navbar-light navbar-expand-lg">
            <a href="index.php" class="navbar-brand">
                    <img src="images/cocktail2.png" alt="logo" title="Home"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item  px-2"><a href="index.php" class="nav-link  color-1 <?php echo empty($page) ? 'active fw-bold' : '' ?>">Home</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=about" class="nav-link  color-1 <?= ($page === 'about') ? 'active fw-bold' : ''  ?>">About</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=posts"  class="nav-link  color-1 <?= ($page === 'posts') ? 'active fw-bold' : ''  ?>">Posts</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=register"  class="nav-link  color-1 <?= ($page === 'register') ? 'active fw-bold' : ''  ?>">Register</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=contact"  class="nav-link  color-1 <?= ($page === 'contact') ? 'active fw-bold' : ''  ?>">Contact</a></li>
                    </ul>
                </div>
            </nav>
