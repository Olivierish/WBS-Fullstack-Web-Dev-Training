<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Übungen Tag 5</title>
    <style>
    
    .bg-body{
        background-color: #011C26 !important;
    }
    .bg-main{
        background-color: #e5fbf9;
    }
    .bg-second{
        background-color: #3385A6;
    }
    .color-0{
        color:white; /*form*/ 
    }
    .color-1{
        color:#1D4859; /*h1*/
    }
    .color-2{
        color:#3385A6; /*h2*/
    }
    .color-3{
        color:#03588C; /*h3 h4*/
    }

    section{
        border-bottom: solid 1px #03588C;
    }
</style>
</head>
<body class="bg-body">
<div id="wrapper" class="container">
    <header  class="jumbotron bg-image px-5 py-3 " style="background-image :url('images/bg.jpg'); height: calc(100vh - 500px); background-size:cover;">
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
                        <li class="nav-item active px-2"><a href="../tag04/uebung_05.php"  class="nav-link  color-1">Tag 04</a></li>
                        <li class="nav-item active px-2"><a href="#"  class="nav-link  color-1">Tag 05</a></li>
                    </ul>
                </div>
            </nav>
        </section>
        </div>
    </header>
    <div class="bg-main p-5">
    <main>
        <h1 class="color-1">Tag 05</h1>
        <div id="content">
            <section class="pt-3 pb-5">
            <h2 class="color-2 text-center">Quiz</h2>
            <div id="ergebnis" class="col-md-6 mx-auto mb-2">
                        <?php 
                        if(isset($_POST['btnSend'])){
                            if(empty($_POST['antwort'])):
                                echo '<p class="text-center text-light p-2 bg-danger rounded-2">';
                                echo "Bitte die Antwort eingeben!";
                                echo '</p>';
                            else :
                                echo '<p class="text-center text-light p-2 bg-success rounded-2">';
                                $stadt = strtolower($_POST['antwort']);
                                switch ($stadt) {
                                    case 'berlin':
                                        echo "Die Antwort ist richtig 🏆";
                                        break;
                                    case 'hamburg':
                                        echo "Hamburg ist zwar die schönste Stadt aber nicht die Hauptstadt Deutschlands";
                                        break;
                                    case 'bonn':
                                        echo "Bonn";
                                        break;
                                    
                                    default:
                                        echo "Falsch";
                                        break;
                                }
                                echo '</p>';
                        endif;
                        } #isset
                        ?>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="bg-second col-md-6 bg-opacity-10 p-3 rounded-2 mx-auto">
                <div class="py-2">
                    <label for="antwort" class=" text-light">Wie heist die Hauptstadt von Deutschland?  </label>
		            <input type="text" name="antwort" placeholder=""  class="form-control" id="antwort" value="<?= $_POST['antwort'] ?? '';?>"/>
                    <p class="text-center text-light">[Berlin, Hamburg, Bonn]</p>
                </div>

                <div class="py-2 w-50 mx-auto">
                <input type="submit" value="senden" class="btn btn-success px-5" name="btnSend"/>
	            </div>
                </form>
            </section>
        </div>
    </main>
    </div>
   
    <footer>

    </footer>
</div>
</body>
</html>