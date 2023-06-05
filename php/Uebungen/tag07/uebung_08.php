<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Übungen Tag 7</title>
    <style>
    
    .bg-body{
        background-color: #212B40 !important;
    }
    .bg-main{
        background-color: #FFFFFF;
    }
    .bg-second{
        background-color: #49BFAA; /* Forms */
    }
    .color-0{
        color:white; /*form*/ 
    }
    .color-1{
        color:#212B40; /*h1*/
    }
    .color-2{
        color:#45858C; /*h2*/
    }
    .color-3{
        color:#A6372D; /*h3 h4*/
    }

    section{
        border-bottom: solid 1px #03588C;
    }
    p{
        color :#D9D9D9;
    }
.navbar-nav > li:hover{
  background-color: #49BFAA;
  transition: all 0.3s ease-in-out;
}
</style>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3 " style="background-image :url('images/bg.jpg'); height: calc(100vh - 450px); background-size:100% 100%;">
        <div class="h-100 position-relative">
            <nav class="navbar navbar-light navbar-expand-md">
                <a href="#" class="navbar-brand">php.olivieris</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto bg-main">
                        <li class="nav-item border-end px-2"><a href="../tag01/bsp01_php_grundlagen.php" class="nav-link  color-1">Tag 01</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag02/bsp01_schleifen_array.php" class="nav-link  color-1">Tag 02</a></li>
                        <li class="nav-item border-end px-2"><a href="#" class="nav-link  color-1">Tag 03</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag04/uebung_05.php"  class="nav-link  color-1">Tag 04</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag05/uebung_06.php"  class="nav-link  color-1">Tag 05</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag06/uebung_07.php"  class="nav-link  color-1">Tag 06</a></li>
                        <li class="nav-item active px-2"><a href="#"  class="nav-link  color-1">Tag 07</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <div class="row sticky-top bg-main"> <!-- Special for the Tag 07-->
            <nav class="navbar navbar-light navbar-expand-md bg-main">
            <h1 class="color-1">Tag 07</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto bg-main">
                        <li class="nav-item border-end px-2"><a href="../tag01/bsp01_php_grundlagen.php" class="nav-link  color-1 fw-bold">Home</a></li>
                        <li class="nav-item border-end px-2"><a href="../tag02/bsp01_schleifen_array.php" class="nav-link  color-1 fw-bold">8 Themen </a></li>
                        <li class="nav-item border-end px-2"><a href="../tag04/uebung_05.php"  class="nav-link  color-1 fw-bold">Login</a></li>
                    </ul>
                </div>
            </nav>
    </div>
        <!-- END HEADER PHP -->
        <div id="content">
            <section class="pt-3 pb-5">
            <h2 class="color-2 text-center">Dozenten bewertung</h2>
            <div id="ergebnis" class="col-md-6 mx-auto mb-2">
                        <?php 

                        if(isset($_POST['btnSend'])){
                            #Muster
                            $zeichen = "/^[a-zA-ZäöüÄÖÜß\-\s\.]{3,30}$/";
                            $mail = "/^.+@.+$/";
                            $ort = "/^(oldenburg|chemnitz|stuttgart|hamburg|ulm|braunschweig)$/i";
                            $plz = "/^[0-9]{5}$/";
                            #$strasse = "//";
                            $strasse = $zeichen;


                            if(empty($_POST['vorname']) || empty($_POST['nachname']) || empty($_POST['bewertung'])):
                                
                                echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                echo "Bitte füllen Sie das Formular aus.";
                                echo '</p>';
                            else :
                                
                                if (!preg_match($zeichen,$_POST['vorname'])) {
                                    echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                    echo "Vorname darf NUR Buchstaben haben (3,30)";
                                    echo '</p>';
                                }
                                else if(!preg_match($zeichen, $_POST['nachname'])){
                                    echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                    echo "Nachname darf NUR Buchstaben haben (3,30)";
                                    echo '</p>';
                                }
                                else if(!preg_match($zeichen, $_POST['strasse'])){
                                    echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                    echo "Strasse darf NUR Buchstaben haben (3,30)";
                                    echo '</p>';
                                }
                                else if (!preg_match($ort, $_POST['wohnort'])) {
                                    echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                    echo "Nur oldenburg|chemnitz|stuttgart|hamburg|ulm|braunschweig sind erlaubt";
                                    echo '</p>';
                                }
                                else if (!preg_match($plz, $_POST['plz'])) {
                                    echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                    echo "PLZ: Nur 5 stellige Zahl erlaubt";
                                    echo '</p>';
                                }
                                else{
                                    $vorname = $_POST['vorname'];
                                    $nachname = $_POST['nachname'];
                                    $strasse = $_POST['strasse'];
                                    $ort = $_POST['wohnort'];
                                    $postcode = $_POST['plz'];
                                    echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                    echo "🎉🎊🎆";
                                    echo '</p>';
                                }
                            endif;

                        }#isset
                        ?>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="bg-second col-md-10 bg-opacity-10 py-5 px-5 rounded-2 mx-auto">
                <!-- <div class="py-2">
                    <label for="antwort" class=" text-light">Wie heist die Hauptstadt von Deutschland?  </label>
		            <input type="text" name="antwort" placeholder=""  class="form-control" id="antwort" value="<?= $_POST['antwort'] ?? '';?>"/>
                    <p class="text-center text-light">[Berlin, Hamburg, Bonn]</p>
                </div>

                <div class="py-2 w-50 mx-auto">
                <input type="submit" value="senden" class="btn btn-success px-5" name="btnSend"/>
	            </div> -->
                <!--radioButton++++++++++++++++++++++++++++-->
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gesch" id="inlineRadio1" value="option1">
            <label class="form-check-label text-light" for="inlineRadio1">Herr</label>
        </div>

        <div class="form-check form-check-inline mb-3">
            <input class="form-check-input" type="radio" name="gesch" id="inlineRadio2" value="option2">
            <label class="form-check-label text-light" for="inlineRadio2">Frau</label>
        </div>
		<!--einzeiligeEingabeFelder++++++++++++++-->
		<div class="form-floating mb-3">
            <input type="text" class="form-control"  placeholder="David" name="nachname">
            <label for="floatingNachname">Name</label>
        </div>
		
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingVorname" placeholder="Birot"  name="vorname">
            <label for="floatingVorname">Vorname</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingStrasse" placeholder="Musterstraße">
            <label for="floatingStrasse"  name="strasse">Strasse</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPLZ" placeholder="91560">
            <label for="floatingPLZ"  name="plz">PLZ</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingWohnort" placeholder="Nürnberg">
            <label for="floatingWohnort"  name="wohnort">Wohnort</label>
        </div>

		<!--checkBoxen+++++++++++++++++++++++++++++-->
        <div class="pt-4">
            <h2 class="color-2">Fachgebiet:</h2>

            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label text-light" for="inlineCheckbox1">Java</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label text-light" for="inlineCheckbox2">PHP</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option1">
            <label class="form-check-label text-light" for="inlineCheckbox4">CSS</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option2">
            <label class="form-check-label text-light" for="inlineCheckbox4">MySql</label>
            </div>
        </div>
		
		<!--radioButton++++++++++++++++++++++++++++-->
		<div class="pt-4">
                <h2 class="color-2">Wie bewerten Sie den Dozenten?</h2>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bewertung" id="inlineRadio1" value="option1">
                <label class="form-check-label text-light" for="inlineRadio1">Schlecht</label>
            </div>

            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="radio" name="bewertung" id="inlineRadio2" value="option2">
                <label class="form-check-label text-light" for="inlineRadio2">Sehr schlecht</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bewertung" id="inlineRadio3" value="option3">
                <label class="form-check-label text-light" for="inlineRadio3">Es geht</label>
            </div>

            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="radio" name="bewertung" id="inlineRadio4" value="option4">
                <label class="form-check-label text-light" for="inlineRadio4">Gibts was besseres</label>
            </div>
        </div>
		<!--selectAuswahl+++++++++++++++++++++++++++-->
        <div class="pt-3">
            <h2 class="color-2">Gratisgeschenk:</h2>
            <div  class="mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Offnen den select menu</option>
                    <option value="1">Urlaub mit dem Dozent</option>
                    <option value="2">Note 1. im Programmieren</option>
                    <option value="3">Gar nichts</option>
                </select>
            </div>
        </div>
		
		<!--submitButton+++++++++++++++++++++++++++++-->
        <div>
            <button type="submit" class="btn btn-primary" name="btnSend">Daten senden</button>
        </div>
		
                </form>
            </section>
        </div>
        <!-- BEGIN FOOTER PHP -->
    </main>
    </div>
   
    <footer>

    </footer>
</div>
</body>
</html>