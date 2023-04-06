<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>PHP Formular Anzeige</title>
</head>

<body>
    <p>
        <?php
        $vorname = htmlentities($_GET["eingab"]);
        echo $vorname;

        ?>
    </p>
</body>

</html>