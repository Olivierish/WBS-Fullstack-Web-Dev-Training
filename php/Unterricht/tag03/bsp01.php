<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>PHP - Grundlagen - 30.05.2023</title>
</head>
<body>
    <div id="wrapper">
        <header style="--bgImg :url('https://wallpaperaccess.com/full/682432.jpg');">
            <div>
                <div id="logo">
                    <h2>php.olivieris</h2>
                </div>
            </div>
        </header>
        <div id="mainContent">
        <aside>
            <h2>Tagen</h2>
            <ul id="nav">
                <li><a href="../tag01/bsp01_php_grundlagen.php">▶ Tag 01</a></li>
                <li><a href="../tag02/bsp01_schleifen_array.php">▶ Tag 02</a></li>
                <li><a href="#">⨀ Tag 03</a></li>
                <li><a href="../tag04/">▶ Tag 04</a></li>
            </ul>
        </aside>
        <main>
            <h1>Tag 03</h1>
            <div id="content">
            <section>
                <h3>Schleifen</h3>
                <?php  
                echo "true <=> false \n";
                    echo true <=> false;
                ?>
                <h3>Koaleszen-Operator</h3>
                <?php 
                if(isset($username)){
                    echo $username;
                }
                else{
                    echo "Hallo";
                }
                echo "<hr>";
                $username ="Jerry";
                echo $username ?? 'Guten Tag';
                ?>
                <h3>Break</h3>
                <?php 
                $counter3 = 1;
                while($counter3 < 15){
                    echo 'Wir sind im Auftrad des Herrn unterwegs. '.$counter3.'<br>';
                    if($counter3 == 7)
                    break;

                    $counter3++;
                }
                ?>
                <hr>
                <h3>Continue</h3>
                <?php 
                for ($i=0; $i <= 15; $i++) { 
                    if ($i == 7 || $i == 13) {
                        continue;
                    }
                    echo 'Wir sind im Auftrad des Herrn unterwegs. '.$i.'<br>';
                }
                ?>
                <hr>
                <h3>Array</h3>
                <?php 
                echo "<div>";          
                echo"<h4>Pop</h4>";
                $liste = ['Apfel', 'banane','Mango'];
                    print_r($liste);
                    echo "</div>";    
                    echo "<div>";          
                    echo"<h4>Psuh</h4>";
                    array_push($liste, 'Birne', 201);
                    print_r($liste);
                    echo "</div>";
                    echo "<div>";          
                    echo"<h4>Pop</h4>";
                    array_pop($liste);
                    print_r($liste);
                    echo "</div>";

                    echo "<div>";             
                    echo"<h4>unshift</h4>";
                    array_unshift($liste, "Guttenberg", "Ali");
                    print_r($liste);
                    echo "</div>";

                    echo "<div>";             
                    echo"<h4>Shift</h4>";
                    array_shift($liste);
                    print_r($liste);
                    echo "</div>";


                    echo "<div>";
                    echo"<h4>sort</h4>";
                    sort($liste); //??????????
                    print_r($liste);
                    echo "</div>";

                    echo "<div>";
                    echo"<h4>Arsort</h4>";
                    arsort($liste); //??????????
                    print_r($liste);
                    echo "</div>";
                    
                    echo "<div>";
                    echo"<h4>Shuffle</h4>";
                    shuffle($liste); //??????????
                    print_r($liste);
                    echo "</div>";

                    echo "<div>";
                    echo"<h4>Implode</h4>";
                    // shuffle($liste); 
                    // print_r($liste);
                    echo implode($liste);
                    echo "<hr>";
                    echo implode("<=>",$liste);
                    echo "<hr>";
                    echo implode(" - ",$liste);
                   
                    echo "</div>";

                    echo "<div>";
                    echo"<h4>Search</h4>";
                    $suche1 = array_search('Apfel',$liste); 
                    var_dump($suche1);
                    echo "</div>";

                ?>
                <h3>Funktionen in PHP (eigene)</h3>
                <?php 
                echo "<div>";
                echo"<h4>Definieren</h4>";
                function gruss(){
                    echo '<p>Hallo Welt!</p>';
                }
                gruss();
                echo "</div>";

                echo "<div>";
                echo"<h4>Definieren mit Argument(e)</h4>";
                //function ausgabe($name ="Hello"){}
                function ausgabe($name){
                    echo '<p>Hallo '.$name.'!</p>';
                }
                ausgabe("Nina");
                ausgabe("Paul");
                ausgabe("Lara");
                echo "</div>";
                ?>


                    <h3>Formulare</h3>
                    <div class="rendered-form">
                        <form action="#" method="POST">
                        <div class="formbuilder-text form-group field-nachname">
                            <label for="nachname" class="formbuilder-text-label"></label>
                            <input type="text" placeholder="Name eigeben" class="form-control" name="nachname" access="false" id="nachname">
                        </div>
                        <div class="formbuilder-text form-group field-vorname">
                            <label for="vorname" class="formbuilder-text-label"></label>
                            <input type="text" placeholder="Vorname eingeben" class="form-control" name="vorname" access="false" id="vorname">
                        </div>
                        <div class="formbuilder-text form-group field-age">
                            <label for="age" class="formbuilder-text-label"></label>
                            <input type="text" placeholder="Alter eingeben" class="form-control" name="age" access="false" id="age">
                        </div>
                        <div class="formbuilder-button form-group field-button-1685438317401">
                            <button type="submit" class="btn-default btn" name="btn" value="senden" access="false" style="default" id="button-1685438317401">Button</button>
                        </div>
                        </form>
                    </div>

                    <div>
                        <h4>GET</h4>
                        <pre>
                            <?php print_r($_GET) ?>
                        </pre>
                        <hr>
                        <h4>POST</h4>
                        <pre>
                            <?php print_r($_POST) ?>
                        </pre>
                       

                    </div>
                    <div>
                    <h4>Daten vom Formular anzeigen</h4>
                    <?php
                    if(isset($_POST['btn'])){
                        if(!empty($_POST['nachname']) || !empty($_POST['vorname'])){
                        echo 'Hallo ' . $_POST['nachname'].' '. $_POST['vorname'].'!';
                        } else{
                            echo "Bitte Name und Vorname eingeben";
                        }
                        if(!empty($_POST['age'])){
                            echo '<p>Alter darf nicht leer sein</p>';
                            } else if(!is_numeric($_POST['age'])){
                                echo '<p>Alter darf nur Zahlen haben.</p>';
                            }
                    }
                    ?>
                    </div>
                </section>
                <section>
                <h3>Übungen</h3>

                </section>
            </div>
        </main>
        </div>
       
        <footer>

        </footer>
    </div>
    <script src="../../scripts/app.js"></script>
</body>
</html>