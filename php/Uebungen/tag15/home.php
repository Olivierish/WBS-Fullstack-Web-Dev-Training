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

    <title>Cocktail Blog - Tag 13 </title>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
<nav class="navbar navbar-light navbar-expand-lg">
            <!-- <h1 class="color-1">Tag 07</h1> -->
            <a href="#" class="navbar-brand">
                    <!-- php.olivieris -->
                    <img src="images/cocktail.png" alt="logo" title="Home"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item  px-2"><a href="#" class="nav-link  color-1">Home</a></li>
                        <li class="nav-item  px-2"><a href="#" class="nav-link  color-1">About</a></li>
                        <li class="nav-item  px-2"><a href="#"  class="nav-link  color-1">Gästebuch</a></li>
                        <li class="nav-item  px-2"><a href="impressum.html"  class="nav-link  color-1">Impressum</a></li>
                    </ul>
                </div>
            </nav>
    <header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 70%),url('images/bg1.jpg'); height: calc(100vh - 500px); background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
    <p class="display-5 text-light position-absolute top-50">Cocktails from the World</p>
    </header>
    <div class="bg-main p-5">
    <main>
        <!-- <h1 class="color-1 fs-2 fw-bold">Online Training</h1> -->
        <?php require_once('inc/master.inc.php');?>
        <div id="content">
            <section class="col-md-12 pt-3 pb-3">
            <!-- <h2 class="h2 color-2 text-center fw-bold mb-5 pt-3">Discover</h2> -->
            <div class="row  pt-3">
                <div class="col-md-6 d-flex align-items-center">
                <div class="hero-section">
                    <h2 class="h2 color-2 text-center fw-bold">Maracuja</h2>
                    <p class="text-light">
                    The bartender Jen Akin is taking this exact same path with her Turnbuckle. A tropical cocktail that comes across as relatively simple and basically follows the template of a Mai Tai. The gag is the Cynar - an Italian Amaro, that is to say a bitter liqueur made from artichokes. Yes, it sounds disgusting, we also hate those supposedly edible succulents. But Cynar is really good stuff - and the bittersweet herbalness gives this rum-heavy drink something incredibly deep and special that blends wonderfully with all the other ingredients - most notably the rum.                    
                </p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="picture-section p-5 pt-0">
                    <img src="images/cocktails/maracuja.jpg" alt="picture">
                </div>
                </div>
            </div>
            </section>
            <section class="col-md-12 pt-3 pb-3">
            <!-- <h2 class="h2 color-2 text-center fw-bold mb-5 pt-3">Discover</h2> -->
            <div class="row  pt-3">
            <div class="col-md-6">
                    <div class="picture-section p-5 pt-0">
                        <img src="images/cocktails/wardroom.jpg" alt="picture">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="hero-section">
                        <h2 class="h2 color-2 text-center fw-bold">Wardroom</h2>
                        <p class="text-light">
                        The wardroom cocktail is a type of mixed drink that was created to honor the wardroom of a ship or naval vessel. It typically contains one or more types of liquor, such as whiskey, gin, vodka, vermouth, and bitters. Depending on the recipe, other ingredients like orange juice, lemon juice, and simple syrup may be added to the cocktail. <br>

                        The wardroom cocktail is a popular choice for aperitifs or pre-dinner drinks, as the combination of liquors and bitters gives the cocktail a light and slightly bitter flavor. It is also a popular choice for social gatherings, as it is easy to make and can be tailored to the individual tastes of each person.                  
                    </p>
                    </div>
                </div>
               
            </div>
            </section>
        </div>

    <hr class="my-5">




</main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2023 Olivieris</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
    php.olivieris
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="impressum.html" class="nav-link px-2 text-light">Impressum</a></li>
    </ul>

  </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>