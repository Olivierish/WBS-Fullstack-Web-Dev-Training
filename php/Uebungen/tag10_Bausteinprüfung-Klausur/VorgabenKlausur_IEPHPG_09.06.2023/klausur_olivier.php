<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">

    <link rel="stylesheet" href="style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">

    <title>Klausur - Olivier</title>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3 " style="background-image :url('images/bg3.jpeg'); height: calc(100vh - 500px); background-size:cover; background-position:100%;">
        <div class="h-100 position-relative">
            <nav class="navbar navbar-light navbar-expand-md">
                <a href="#" class="navbar-brand">
                    <!-- php.olivieris -->
                    <img src="images/logo.png" alt="logo" />
                </a>
            </nav>
        </section>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <h1 class="color-1 fs-2 fw-bold">Klausur PHP Grundlagen Olivier Ishimwe</h1>
        <?php require_once('inc/master.inc.php');?>
        <?php require_once('inc/personenListe.php');?>
        <p><?= displayDate(); ?></p>
        <div id="content">
            <section class="pt-3 pb-3">
            <h2 class="color-2 text-center fw-bold">Rechner </h2>
            <!-- TODO -->
                <!-- <form action="<?php #echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="bg-second col-md-6 bg-opacity-10 p-3 rounded-2 mx-auto"> -->
                <form action="<?php echo $_SERVER['PHP_SELF'];?>#messageBox" method="POST" class="bg-second col-md-6 bg-opacity-10 p-4 rounded-2 mx-auto">
                <div class="form-group py-2">
		            <input type="text" name="anrede" placeholder="Anrede..."  class="form-control" id="antwort" value="<?= $_POST['anrede'] ?? '';?>"/>
                    <!-- <p class="text-center text-light">[Herr, Frau, Divers]</p> -->
                </div>
                <div class="form-group py-2">
		            <input type="text" name="name" placeholder="Name..."  class="form-control" id="antwort" value="<?= $_POST['name'] ?? '';?>"/>
                </div>
                <div class="form-group py-2">
		            <input type="text" name="euro" placeholder="€..."  class="form-control" id="antwort" value="<?= $_POST['euro'] ?? '';?>"/>
                </div>
                <span class="text-light fw-bold">in :</span><br>
                <div class="form-check form-check-inline py-2">
                    <label class="form-check-label text-light" for="dollars">Dollar</label>
                    <input class="form-check-input" type="radio" name="waehrung" id="dollars" value="dollars" <?= ' '.isRadioChecked($_POST['waehrung'] ?? '','dollars'); ?> >  
                </div>
                <div class="form-check form-check-inline py-2">
                    <label class="form-check-label text-light" for="tuerkLira">Türkische Lira</label>
                    <input class="form-check-input" type="radio" name="waehrung" id="tuerkLira" value="tuerkLira"  <?= ' '.isRadioChecked($_POST['waehrung'] ?? '','tuerkLira'); ?>  >    
                </div>
                <div class="form-check form-check-inline py-2">
                    <label class="form-check-label text-light" for="yen">Yen</label>
                    <input class="form-check-input" type="radio" name="waehrung" id="yen" value="yen" <?= ' '.isRadioChecked($_POST['waehrung'] ?? '','yen'); ?> >    
                </div>
                <div class="form-check form-check-inline py-2">
                    <label class="form-check-label text-light" for="pfund">Britische Pfund</label>
                    <input class="form-check-input" type="radio" name="waehrung" id="pfund" value="pfund" <?= ' '.isRadioChecked($_POST['waehrung'] ?? '','pfund'); ?> >    
                </div>
                
                
                <div class="py-2 d-flex justify-content-center">
                <input type="submit" value="Umrechnen" class="btn btn-success px-5" name="umrechnen"/>
	            </div>
                </form>
            </section>
        </div>
    </main>

    <?php 
        if(isset($_POST['umrechnen'])):
            $musterAnrede = "/^(Herr|Frau|Divers)$/i";
            $musterName="/^[a-zA-ZäöüÄÖÜß\s]{2,50}$/i";
            $musterEuro="/^[1-9][0-9]{0,3}$/";

            $waehrungNamen = [
                'dollars' => 'Dollars',
                'yen' => 'Yen',
                'pfund' => 'Britische Pfund',
                'tuerkLira' => 'Türkische Lira'
            ];

            $anrede =  htmlspecialchars($_POST["anrede"]);
            $name =  htmlspecialchars($_POST["name"]);
            $euro =  htmlspecialchars($_POST["euro"]);
            $waehrung =  (isset($_POST["waehrung"]))? htmlspecialchars($_POST["waehrung"]) : '';
            
            if(!preg_match($musterAnrede, $anrede)){
                displayMsg('Anrede','Anrede darf nur (Herr, Frau oder Divers) haben.');
            }
            else if(!preg_match($musterName, $name)){
                displayMsg('Name','Name darf nr Buchstaben haben(mind. 2, maxi. 50).');
            }
            else if(!preg_match($musterEuro, $euro)){
                displayMsg('Euros','Bitte eine Zahl(1-4 stellig) eingeben(das 1.Zeichen darf nicht 0 sein).');
            }
            else if(empty($waehrung)){
                displayMsg('Währung','Bitte eine Wäahrung aussuchen.');
            }
            else{
                $summe = rechnenMitWaehrung($euro, $waehrung);
                $msg = 'Hallo '.$anrede.' '.$name.'<br/><span class="fw-bold fs-4">'.$euro.' € sind = '.number_format($summe,2,',','.').' '.$waehrungNamen[$waehrung].'</span>';
                displayMsg('',$msg, true);
            }
           
        endif; #isset 
    ?>


    <?php 
        var_dump($personen);
        
    ?>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">© 2023 Olivieris</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    php.olivieris
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="impressum.html" class="nav-link px-2 text-muted">Impressum</a></li>
      <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li> -->
    </ul>
  </footer>
    </div>
</div>
</body>
</html>