
<?php 
$page = $_GET['page'] ?? '';
require_once("inc/header.inc.php");

switch ($page) {
    case 'about': include 'inc/about.inc.php'; break;
    case 'referenzen': include 'inc/referenzen.inc.php'; break;
    case 'kontakt': include 'inc/kontakt.inc.php'; break;
    
    default:
        include 'inc/home.inc.php'; break;
}

#echo $page;
require_once("inc/footer.inc.php");
?>