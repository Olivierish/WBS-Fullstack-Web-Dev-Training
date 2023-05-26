<head>
    <style>
        td,th{
            border: 1px solid pink;
        }
    </style>
</head>
<body>
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


</body>