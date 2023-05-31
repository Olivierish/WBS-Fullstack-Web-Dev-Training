<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>PHP - Grundlagen - 26.05.2023</title>
</head>
<body>
    <div id="wrapper">
        <header style="--bgImg :url('../images/bg-header4.jpg');">
            <div>
                <div id="logo">
                    <h2>php.olivieris</h2>
                </div>
            </div>
        </header>
        <div id="mainContent">
        <aside>
            <h2>Tagen</h2>
            <ul>
                <li><a href="../tag01/bsp01_php_grundlagen.php">▶ Tag 01</a></li>
                <li><a href="#">⨀ Tag 02</a></li>
                <li><a href="#">▶ Tag 03</a></li>
                <li><a href="#">▶ Tag 04</a></li>
            </ul>
        </aside>
        <main>
            <h1>Tag 02</h1>
            <div id="content">
            <section>
                <h3>Schleifen</h3>
                <?php  
        $benzin = 1.75;
        $diesel = 1.80;
    ?>
    <table>
        <caption>Tankstelle - Preise</caption>
        <thead>
            <tr>
                <th>Liter</th>
                <th>Benzin €</th>
                <th>Diesel €</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            for ($i=0; $i < 5; $i++):
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td></td>
                <td></td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
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