<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    
<title>Cocktails Blog <?php pageTitle() ?></title>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
<nav class="navbar navbar-light navbar-expand-lg">
            <a href="index.php" class="navbar-brand">
                    <img src="images/design/cocktail2.png" alt="logo" title="Home"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item  px-2"><a href="index.php" class="nav-link  color-6 fs-5 <?php echo empty($page) ? 'active' : '' ?>">Home</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=about" class="nav-link  color-6 fs-5 <?= ($page === 'about') ? 'active' : ''  ?>">About</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=cocktails"  class="nav-link  color-6 fs-5 <?= (($page === 'cocktails') || ($page === 'cocktail-read-more')) ? 'active' : ''  ?>">Cocktails</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=contact"  class="nav-link  color-6 fs-5 <?= ($page === 'contact') ? 'active' : ''  ?>">Contact</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=login"  class="nav-link  color-6 fs-5 <?= ($page === 'login') ? 'active' : ''  ?>">Login</a></li>
                        <li class="nav-item  px-2"><a href="index.php?page=register"  class="nav-link  color-6 fs-5 <?= ($page === 'register') ? 'active' : ''  ?>">Register</a></li>
                    </ul>
                </div>
            </nav>

    
        <?php if(isset($_SESSION['msg'])):?>
            <div id="msg" class="col-md-6 p-2 mx-auto">
                <p class="alert bg-dark color-5" style="transition : all ease-in-out 0.3s;"><?= $_SESSION['msg']?></p>
            </div>
        <?php endif; ?>
    