<?php 
$zeichenMuster="/^[a-zäüöß]{1}[a-zäüöß\s\-]{1,19}$/i";
$mailMuster="/^[a-zA-Z0-9\.]+@[a-zA-Z\-]+\.[a-zA-Z]+$/i";


if (!preg_match($zeichenMuster,$_POST['nachname']) ) {
    # || !preg_match($zeichenMuster,$_POST[''])
    header("Location: ../index.php?msg=errorNN");
}
else if (!preg_match($zeichenMuster,$_POST['vorname']) ) {
    # || !preg_match($zeichenMuster,$_POST[''])
    header("Location: ../index.php?msg=errorVN");
}
else if (!preg_match($mailMuster,$_POST['mail']) ) {
    # || !preg_match($zeichenMuster,$_POST[''])
    header("Location: ../index.php?msg=errorM");
}
else{
    session_start();
    $_SESSION['nn'] = $_POST['nachname'];
    $_SESSION['vn'] = $_POST['vorname'];
    $_SESSION['m'] = $_POST['mail'];
    header('Location:../index.php');
}
?>