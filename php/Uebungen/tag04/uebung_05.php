<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Übungen Tag 4</title>
    <style>
    
    .bg-body{
        background-color: #022859 !important;
    }
    .bg-main{
        background-color: #EADDCD;
    }
    .bg-second{
        background-color: #03658C;
    }
    .color-0{
        color:white;
    }
    .color-1{
        color:#03588C;
    }
    .color-2{
        color:#ED7670;
    }
    .color-3{
        color:#03588C;
    }

    section{
        border-bottom: solid 1px #03588C;
    }
</style>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3" style="background-image :url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: calc(100vh - 500px); background-size:cover;">
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
                        <li class="nav-item active px-2"><a href="#"  class="nav-link  color-1">Tag 04</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <h1 class="color-1">Tag 04</h1>
        <div id="content">
            <section class="pt-3 pb-5">
                <h2 class="color-2 text-center">Zahlen</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="bg-second col-md-6 bg-opacity-10 p-3 rounded-2 mx-auto">
                <div class="py-2">
                    <label for="zahl1" class=" text-light">Bitte eien Zahl eingeben : </label>
		            <input type="text" name="zahl1" placeholder="Zahl eingeben"  class="form-control" id="zahl1" value="<?= $_POST['zahl1'] ?? '';?>"/>
	            </div>
                <div class="py-1">
                    <label for="zahl2"  class=" text-light">Bitte eien Zahl eingeben : </label>
		            <input type="text" name="zahl2" placeholder="Zahl eingeben"  class="form-control" id="zahl2" value="<?= $_POST['zahl2'] ?? '';?>"/>
	            </div>
                <div class="py-3">
                <input type="submit" value="senden" class="btn btn-success" name="btnZahlen"/>
		<input type="submit" value="loeschen"  class="btn btn-danger" name="loeschen"/>

	            </div>
                </form>
            </section>
           
            <section class="pt-3 pb-5">
            <h2 class="color-2 text-center">Ergebnis</h2>
            <div class="row">
                <div class="col-12">                
                    <?php
                    if(isset($_POST['btnZahlen'])){
                        if(
                            empty($_POST['zahl1']) ||
                            empty($_POST['zahl2'])
                        ):
                        echo '<p> Bitte alle Felder ausfüllen </p>';
                        else : 
                            if((is_numeric($_POST['zahl1']) == false) ||
                            (is_numeric($_POST['zahl2']) == false) || 
                            ($_POST['zahl1'] <= 0) || 
                            ($_POST['zahl2'] <= 0)
                            ){
                                echo '<p> Bitte alle Felder ausfüllen mit positive Zahlen(größer als 0).</p>';
                            }
                            else{
                               $zahl1 = $_POST['zahl1'];
                               $zahl2 = $_POST['zahl2'];
                               ?>
                               <h4 class="color-3">Ihre Angaben :</h4>
                               <p>
                                    Zahl 1 : <?=  $zahl1 ?><br>
                                    Zahl 2 : <?=  $zahl2 ?>
                                </p>
                                <hr border-color-light>
                                <span class="fw-bold">Multiplication : </span> <?= $zahl1 .'x'.$zahl2.' ist = '.$zahl1 * $zahl2 .'<br>' ?>
                                <span class="fw-bold">Addition : </span> 
                                <?= $zahl1.'+'.$zahl2.' ist = '.($zahl1 + $zahl2).'<br>' ?>
                                <span class="fw-bold">Substraktion : </span> <?= $zahl1 .'-'.$zahl2.' ist = '. ($zahl1 - $zahl2) .'<br>' ?>
                                <span class="fw-bold">Division : </span> <?= $zahl1 .'/'.$zahl2.' ist = '. $zahl1 / $zahl2 .'<br>' ?>
                                <span class="fw-bold">Modulo : </span> <?= $zahl1 .'%'.$zahl2.' ist = '. $zahl1 % $zahl2 .'<br>' ?>
                                <span class="fw-bold">Potenz : </span> <?= $zahl1 .'**'.$zahl2.' ist = '. $zahl1 * $zahl2 .'<br>' ?>

                               <?php
                               for ($i=1; $i <= $zahl1; $i++) { 
                                echo '<br>';
                                for ($j=1; $j <= $zahl2; $j++) { 
                                    echo $i.'x'.$j.'  ';
                                }
                               }
                            }
                        endif;
                    }
                    if(isset($_POST['loeschen'])){
                        echo "here we go";
                        unset($_POST['zahl1'],$_POST['zahl2'],$zahl1, $zahl2);
                        header("Refresh:0");
                    }
                    ?>
                </div>
            </div>
            </section>
        </div>
    </main>
    </div>
   
    <footer>

    </footer>
</div>
</body>
</html>
