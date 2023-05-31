<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/style.css">
    <title>PHP - Grundlagen</title>
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
                <li><a href="#">⩥ Tag 01</a></li>
                <li><a href="../tag02/bsp01_schleifen_array.php">▷⨀ Tag 02</a></li>
                <li><a href="#">▶ Tag 03</a></li>
                <li><a href="#">→ Tag 04</a></li>
            </ul>
        </aside>
        <main>
            <h1>Tag 01</h1>
            <div id="content">
            <section>
                <h3>Schleifen</h3>
                <?php
    $a =2;
    echo $a;
    echo "<hr>";
    $a ="Hello World";
    echo $a;
    echo "<hr>";

    echo '$a hat den Wert: $a';

    echo "<hr>";

    echo '$a hat den Wert: ' .$a;
    
    echo "<hr>";

    echo 'Ich bin "30" Jahre alt';

    echo "<hr>";

    echo number_format(15.9);

    echo "<hr>";
    $s = 15.5;
    echo gettype($s);
    ?>
    <?php 
    echo "<hr>";
        $table = [
            [1, 2.23, 3.456],
            [2, 5.93, 6.98],
            [3, 8.44, 9.65]
        ];
        
        $rows = count($table);
        $columns = count($table[0]);
        ?>
        <table>
            <tr>
                <th>Liter</th>
                <th>Benzin</th>
                <th>DIesel</th>
            </tr>
        <?php
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                echo "<td>";
                if($j!=0){
                    $table[$i][$j] = number_format($table[$i][$j],2);
                }
                echo $table[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
        
    ?>
     </table>
<?php
     echo "<table>";
    echo "<tr>";
    echo "<th>Liter</th>";
    echo "<th>Benzin in €</th>";
    echo "</tr>";
    $preisBenzin = [1.75,3.5, 5.25,7,8.75,10.5,12.25,14,15.75,17.5];
    $a =0;
    while($a < count($preisBenzin)){
        echo "<tr>";
        echo "<td>  ".($a+1)."</td>";
        echo "<td> Liter Benzin kostet ".$preisBenzin[$a]." € </td>";
        echo "</tr>";
        $a++;
    }
    echo "</table>";    
?>

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