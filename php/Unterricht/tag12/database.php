<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="../../styles/style.css">
    <script src="app.js" async></script>
    
    <title>PHP - Database - 13.06.2023</title>
</head>
<body>
    <div id="wrapper">
        <header style="--bgImg :url('https://wallpaperaccess.com/full/1623270.jpg');">
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
                <li><a href="../tag11/bsp_oop.php">▶ Tag 11</a></li>
                <li><a href="#">▶ Tag 12</a></li>
            </ul>
        </aside>
        <main>
            <h1>Tag 12 - PHP MYSQL</h1>
            <div id="content">
                <section>
                    <div>
                        <h3>PHP - MYSQL</h3>
                        <?php  
                            // $db = new PDO('mysql:host=locqlhost;dbname=db_php_webfull02', 'root', '');
                            // $stmt = $db->prepare('SELECT * FROM users');
                            // $stmt->execute();
                            // $result = $stmt->fetchAll();
                            // var_dump($result);
                        ?>
                    </div>
                    <div>
                        <h3>PDO - Atribute</h3>
                        <?php  
                        $optionen = [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                        ];
                        try {
                            $db = new PDO('mysql:host=locqlhost;dbname=db_php_webfull02', 'root', '', $optionen);
                        } catch (PDOException $e) {
                            // var_dump($e -> getMessage());
                            echo 'Datenbankverbindung fehlgeschlagen.';
                            die();
                        }
                                $stmt = $db->prepare('SELECT * FROM users'); #stmt : statement 
                                $stmt->execute();
                                $results = $stmt->fetchAll();
                                // echo '<pre>var_dump($result);</pre>';
                            ?>
                            <pre><?php #var_dump($result)?></pre>
                            <pre><?php #var_dump($db->errorInfo())?></pre>
                    </div>
                    <div>
                        <h3>Alle Daten anzeigen(erstmal nur fie Namen)</h3>
                        <ul class="list-group list-group-dark">
                            <?php foreach ($results as $key => $result): ?>
                                <li class="list-group-item">
                                    <details>
                                        <summary><?php echo strtoupper($result['nachname']. ' ' . $result['vorname']); ?></summary>
                                        <div><?= $result['email'] ?> </div>
                                        <?php if($result['motto'] !== NULL): ?>
                                        <div style = "color:#fd62fc;">
                                        <?= $result['motto'] ?> 
                                        </div>
                                <?php endif; ?>
                                    </details>
                                    <hr>
                                </li>
                                <li>
                                <?php echo strtoupper($result['nachname']); ?>
                                <a href="database.php?id=<?= $result['id'] ?>" class="">
                                    Detailansicht
                                </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div>
                        <?php 
                        if(isset($_GET['id'])):
                            $stmt = $db->prepare('SELECT * FROM `USERS` WHERE `id` = :nummer ');
                            $stmt->bindValue(':nummer', $_GET['id']);
                            $stmt->execute();
                            $result = $stmt -> fetch();
                            ?>
                            <?php if ($result != false): ?>
                            <ul>
                                <?php if($result['motto'] !== NULL): ?>
                                <li style = "color:#fd62fc;">
                                    <?= $result['motto'] ?> 
                                </li>
                                <?php endif; ?>
                                <li>
                                    <?= $result['nachname'] . ', ' . $result['vorname'] ?> 
                                </li>
                            </ul>
                        <?php
                        endif;
                        endif;
                        ?>
                    </div>
                </section>
                
            </div>
        </main>
        <footer>

        </footer>
    </div>
    <script src="app.js"></script>
    <script src="scripts/app.js"></script>
</body>
</html>