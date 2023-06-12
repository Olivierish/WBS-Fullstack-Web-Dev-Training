<!DOCTYPE html>
<html lang="de">
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

    <title>Tag 11 - Klassen </title>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3 " style="background-image :url('images/bg.jpg'); height: calc(100vh - 500px); background-size:cover; background-position:100%;">
        <div class="h-100 position-relative">
            <nav class="navbar navbar-light navbar-expand-md">
                <a href="#" class="navbar-brand">
                    <!-- php.olivieris -->
                    <img src="images/car1.png" alt="logo" />
                </a>
            </nav>
        </section>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <h1 class="color-1 fs-2 fw-bold">Autohaus</h1>
        <?php require_once('inc/master.inc.php');?>
        <p><?= displayDate(); ?></p>
        <div id="content">
            <section class="pt-3 pb-3">
            <h2 class="color-2 text-center fw-bold mb-5 pt-3">Autos zum Kauf verfügbar </h2>
            <!-- <h2 class="color-2 text-center fw-bold mb-5 pt-3">Die letzten Besucher(in) </h2> -->
            <div class="row g-2 g-lg-3">
                <?php
                require_once('inc/autosListe.php');

                foreach ($autosListe as $auto):
                // echo '<hr>';
                ?> 
                <div class="col-sm-3">
                    <div class="card">
                    <div class="card-body">
                        <?php 
                        new Auto($auto['marke'], $auto['farbe'], $auto['ps'], $auto['kraftstoffart'], $auto['tankvolumen'], $auto['verbrauchProKm'], $auto['erstzulassung'],$auto['preis']);
                        ?>
                    </div>
                </div>
            </div>
            <?php 
            endforeach; 
            ?>
            <p class="text-secondary">Wenn die Erstzulassung kleiner als 2021 ist dann gibt es einen Rabatt von 10%.
Die Angaben Rabatt und den neuen Preis anzeigen (siehe Muster).</p>
            </section>
        </div>

    <hr class="my-5">




</main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2023 Olivieris</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    php.olivieris
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="impressum.html" class="nav-link px-2 text-muted">Impressum</a></li>
    </ul>

  </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>