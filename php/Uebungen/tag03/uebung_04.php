<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Übungen Tag 3</title>
    <style>

    </style>
</head>
<body class="bg-secondary">
<div id="wrapper">
    <header  class="jumbotron bg-image" style="background-image :url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg'); height: calc(100vh - 500px);">
        <div>
            <div id="logo">
                <h2>php.olivieris</h2>
            </div>
        </div>
    </header>
    <div class="container bg-light">
    <aside>
        <h2>Tagen</h2>
        <ul id="nav">
            <li><a href="../tag01/bsp01_php_grundlagen.php">▶ Tag 01</a></li>
            <li><a href="../tag02/bsp01_schleifen_array.php">▶ Tag 02</a></li>
            <li><a href="#">⨀ Tag 03</a></li>
            <li><a href="#">▶ Tag 04</a></li>
        </ul>
    </aside>
    <main>
        <h1>Tag 03</h1>
        <div id="content">
        <section>
                <h3>Formulare</h3>
                <!-- <div class="rendered-form">
                    <form action="#" method="POST" class="col-md-6 bg-primary p-2 m-2">
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
                        <button type="submit" class="btn-light btn mt-2" name="btn" value="senden" access="false" style="default" id="button-1685438317401">Button</button>
                    </div>
                    </form>
                </div> -->

                <div class="rendered-form">
                    <form>
                        <fieldset class="border p-2 mb-4">
                            <legend class =" w-auto">Persönlich</legend>
                            <div class="formbuilder-text form-group field-name">
                                <label for="name" class="formbuilder-text-label">Name</label>
                                <input type="text" class="form-control" name="name" access="false" id="name">
                            </div>
                            <br>
                            <div class="formbuilder-text form-group field-vorname">
                                <label for="vorname" class="formbuilder-text-label">Vorname</label>
                                <input type="text" class="form-control" name="vorname" access="false" id="vorname">
                            </div>
                        </fieldset>
                        <fieldset class="border p-2 mb-4">
                            <legend class =" w-auto">
                                Multiplikation
                            </legend>
                            <div class="input-group mb-3">
                            <div class="">
                                <label for="zahl1" class="" style="display:inline-block">Zahl 1</label>
                                <input type="text" class="" name="zahl1" access="false" id="zahl1">
                            
                                <label for="zahl2" class="formbuilder-text-label">Zahl 2</label>
                                <input type="text" class="form-control" name="zahl2" access="false" id="zahl2">
                            </div>
                        </div>
                        </fieldset>
                        
                        <fieldset class="border p-2 mb-4">
                            <legend class =" w-auto">
                            Währung(€ to $)
                            </legend>
                            <div class="formbuilder-text form-group field-amount">
                            <label for="amount" class="formbuilder-text-label">Amount</label>
                            <input type="text" class="form-control" name="amount" access="false" id="amount">
                        </div>
                        </fieldset>   
                        
                        <div class="formbuilder-button form-group field-ausgabe">
                            <button type="submit" class="btn-default btn" name="ausgabe" value="ausgabe" access="false" style="default" id="ausgabe">Ausgabe</button>
                        </div>
                        <div class="formbuilder-button form-group field-reset">
                            <button type="reset" class="btn-default btn" name="reset" value="reset" access="false" style="default" id="reset">Löschen</button>
                        </div>
                     
                        
                        
                </form>

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
</body>
</html>
