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

    <title>Tag 12 - Online Training - Exercise with PHP Classes </title>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3 " style="background-image :url('images/bg4.jpg'); height: calc(100vh - 500px); background-size:cover; background-position:100%;">
        <div class="h-100 position-relative">
            <nav class="navbar navbar-light navbar-expand-md">
                <a href="#" class="navbar-brand">
                    <!-- php.olivieris -->
                    <img src="images/logo.png" alt="logo" title="Home"/>
                </a>
            </nav>
        </section>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <h1 class="color-1 fs-2 fw-bold">Online Training</h1>
        <?php require_once('inc/master.inc.php');?>
        <p><?= displayDate(); ?></p>
        <div id="content">
            <section class="pt-3 pb-3">
            <h2 class="color-2 text-center fw-bold mb-5 pt-3">Students</h2>
            <!-- <h2 class="color-2 text-center fw-bold mb-5 pt-3">Die letzten Besucher(in) </h2> -->
            <div class="row g-2 g-lg-3">
                <?php
                require_once('inc/stundentList.php');

                foreach ($stundentList as $student):
                // echo '<hr>';
                ?> 
                <div class="col-sm-3">
                    <div class="card">
                    <div class="card-body">
                        <?php 
                        #new Student($student['firstname'], $student['lastname'], $student['email'], $student['preis'], $student['seminar'], $student['city'], $student['age']);
                        ?>
                    </div>
                </div>
            </div>
            <?php 
            endforeach; 
            ?>
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