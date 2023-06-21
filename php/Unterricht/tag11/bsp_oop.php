<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>PHP - Klassen - 12.06.2023</title>
</head>
<body>
    <div id="wrapper">
        <header style="--bgImg :url('images/bg.jpg');">
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
                <li><a href="../tag04/">...</a></li>
                <li><a href="#">▶ Tag 11</a></li>
            </ul>
        </aside>
        <main>
            <h1>Tag 11</h1>
            <div id="content">
            <section>
                <div>
                    <h3>Funktionen</h3>
                    <?php  
                    #------------------------------------------------
                        $konto1 = [
                            'iban'  => 'DE123456789',
                            'name'  => 'Max Mustermann',
                            'guthaben'  => 800
                        ];
                        
                        $konto2 = [
                            'iban'  => 'DE787878785',
                            'name'  => 'Hilde Boss',
                            'guthaben'  => 1300
                        ];
                        
                        $konto3 = [
                            'iban'  => 'DE987987987',
                            'name'  => 'Tom Jerry',
                            'guthaben'  => 350
                        ];
                        
                        $konto4 = [
                            'iban'  => 'DE65656565658',
                            'name'  => 'Anna Gold',
                            'guthaben'  => 3300
                        ];
                        
                        function kontoAusgabe($userKonto) {
                            echo "Kontoinhaber: {$userKonto['name']} <br />
                                IBAN: {$userKonto['iban']} <br />
                                Der Kontostand ist: {$userKonto['guthaben']} <br />
                                +++++++++++++++++++++++++++++++++++++++++++++<br />";
                        }
                        
                        kontoAusgabe($konto1);
                        kontoAusgabe($konto2);
                        kontoAusgabe($konto3);
                        kontoAusgabe($konto4);
                        
                        #------------------------------------------------------------
                    function transfer($from, $to,$amount){
                        print_r($from);
                        echo '-----<br>';
                        print_r($to);
                        echo '<hr>';
                    
                    }
                    transfer($konto1, $konto2, 200);
                    ?>
                </div>
            </section>
            <section>
                <h2>Referenzen</h2>
                <div>
                    <?php
                    $wert1 = 22;
                    echo '<br> wert (beginn) +++<br>';
                    echo $wert1;
                    $wert2 = &$wert1;

                    echo '<br> wert2 = wert1 +++<br>';
                    echo $wert2;

                    echo '<br> wert2 (wert1 wurde geändert) +++<br>';
                    $wert1 = 356;
                    echo $wert2;

                    echo '<br> wert1 neuer Inhalt +++<br>';
                    echo $wert1;
                    ?>
                </div>
            </section>
            <section>
                <h3>Klassen</h3>
                <div>
                    <?php
                   class BankKonto1{
                    public $iban;
                    public $guthaben;
                   }

                   $foo = new BankKonto1();
                   var_dump($foo);
                   echo "<br>";
                   $bar = new BankKonto1();
                   var_dump($bar);

                   echo '<hr>';
                   $foo->iban = 'DE123456789';
                   $foo->guthaben = 1000;
                   var_dump($foo);

                //    $bar->baz = 'Hallo';
                   var_dump($bar);
                    ?>
                </div>
            </section>
            <section>
                <h3>Klassen</h3>
                <div>
                    <?php
                        include_once("BankKonto.php");
                    ?>
                </div>
            </section>
        </div>
        </main>
        <footer>

        </footer>
    </div>
    <script src="../../scripts/app.js"></script>
</body>
</html>