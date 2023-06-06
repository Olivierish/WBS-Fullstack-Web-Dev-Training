<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Tag 08</title>
    <style>
        :root{
            --color-1:; /*bs Body background */
            --color-2:; /*bs main background */
            --color-3:; /*bs forms aside background */
            --color-4:; /*bs text main */
            --color-4:; /*bs text h1 */
        }
        .bg-body{
            background-color: #193559 !important;
        }
        .bg-main{
            background-color: #262625;
        }
        .bg-second{
            background-color: #1A2873; /* Forms */
        }
        .color-h0{
            color:white; /*form*/ 
        }
        .color-h1{
            color:#D9631E; /*h1*/
        }
        .color-h2{
            color:#DBF229; /*h2*/
        }
        .color-h3{
            color:#A6372D; /*h3 h4*/
        }
        .rkpreis{
            /* background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 11.2%, rgba(110,123,251,1) 91.1% );    */
            background-image: linear-gradient( 290.6deg, rgba(156,252,248,1) 21.2%, #a9b0f5 71.1% );   
        }
        .preis{
            background-image: linear-gradient( 109.6deg, rgba(156,252,248,1) 21.2%, rgba(110,123,251,1) 91.1% );   
        }
        .farbe{
            display: inline-block;
            width: fit-content;
            padding: 3px 10px;
            border-radius: 5px;
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
            <nav class="navbar navbar-light navbar-expand-lg">
            <!-- <h1 class="color-1">Tag 07</h1> -->
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="..." width="150" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item border-end px-2"><a href="#" class="nav-link  color-1 fw-bold">Home</a></li>
                        <li class="nav-item border-end px-2"><a href="#" class="nav-link  color-1 fw-bold">Info</a></li>
                        <li class="nav-item border-end px-2"><a href="#"  class="nav-link  color-1 fw-bold">Login</a></li>
                    </ul>
                </div>
            </nav>
            <header  class="jumbotron bg-image px-5 py-3 bg-light mt-2 position-relative" style="background-image :url('images/bg-jumbo.png'); height: calc(270px); background-size:100% 100%;">
            <p class="display-5 text-light shadow">WebDesign Auto-Finanzierung</p>
            <p class="lead text-dark position-absolute end-0 bottom-0 pe-5">Heute ist: <?= date("d/m/Y") ?></p>
        </header>
        <div class="row mt-5 gx-4">
            <div class="col">
                <div class="p-4 border rounded-2">
                <h2>Rechner</h2>
                <form>
                <div class="form-group py-2">
                    <label for="nachname">Nachname</label>
                    <input type="text" class="form-control" name="nachname" id="nachname" placeholder="Mustermann">
                </div>

                <div class="form-group py-2">
                    <label for="vorname">Vorname</label>
                    <input type="text" class="form-control" name="vorname" id="vorname" placeholder="Max">
                </div>

                <div class="form-group py-2">
                    <label for="marke">Automarke</label>    
                    <select class="custom-select form-control" name="marke" id="marke">
                        <!-- <option selected>Open this select menu</option> -->
                        <option value="honda" selected>Honda</option>
                        <option value="golf">Golf</option>
                        <option value="bmw">BMW</option>
                    </select>
                </div>

                <div class="form-group py-2">
                    <label for="anzahlung">Anzahlung</label>
                    <input type="number" class="form-control" name="anzahlung" id="anzahlung" placeholder=" ">
                </div>

                <div class="form-group py-2">
                    <label for="laufzeit">Laufzeit(Monat)</label>    
                    <select class="custom-select form-control" name="laufzeit" id="laufzeit">
                        <!-- <option selected>Open this select menu</option> -->
                        <option value="36" selected>36</option>
                        <option value="24">24</option>
                        <option value="12">12</option>
                    </select>
                </div>

                <div class="form-group py-2">
                    <label for="farbe">Lieblingsfarbe</label>    
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="green" name="farbe" class="custom-control-input">
                        <label class="custom-control-label" for="green">Grün</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="yellow" name="farbe" class="custom-control-input">
                        <label class="custom-control-label" for="yellow">Gelg</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="red" name="farbe" class="custom-control-input">
                        <label class="custom-control-label" for="red">Rot</label>
                    </div>
                </div>

                <div class="form-group py-2">
                    <button type="button" class="btn btn-secondary btn-lg form-control" name="btnOrder">Bestellen</button>
                </div>

                </form>
                </div>
        	    
            </div>
            <div class="col">
                <div class="p-4 border rounded-2">
                    <?php
                        if(false):

                        else:
                            $nachname = "Mido";
                            $vorname = "Oli";
                            $marke = "Honda";
                            $farbe = "Grün";
                            $farbevalue = "green";
                            $anzahlung = 1000;
                            $laufzeit = 36;
                            $preis = 23000;
                            $restkaufpreis = 22000;
                            $bearbeitungsgebuehr = 440;
                            $monatlicheRate = 611.11;
                            echo "<h2>Ratenfinanzierung</h2>";
                            echo "<hr>";
                            echo "<p>{$nachname} {$vorname}</p>";
                            echo "<hr>";
                            echo "<p>Marke: {$marke}</p>";
                            echo '<p>Lieblingsfarbe: <span class="farbe" style="background-color:'.$farbevalue.'">'.$farbe.'</span></p>';
                            echo "<p>Anzahlung: {$anzahlung}€</p>";
                            echo "<p>Laufzeit: {$laufzeit} Monate</p>";
                            echo '<div class="preis bg-success rounded-2 px-3 pt-3 pb-1 mb-3 fw-bold ">';
                            echo "<p>Preis: {$preis}€</p>";
                            echo '</div>';
                            echo '<div class="rkpreis border bg-primary rounded-2 px-3 pt-3 pb-1 fw-bold">';
                            echo "<p>Restkaufpreis: {$restkaufpreis}€</p>";
                            echo "<p>Bearbeitungsgebuehr(2%): {$bearbeitungsgebuehr}€</p>";
                            echo "<p>MonatlicheRate: {$monatlicheRate}€</p>";
                            echo '</div>';




                    
                        endif; #end isset 
                    ?>
                    

                </div>
            </div>

</div>
</body>
</html>