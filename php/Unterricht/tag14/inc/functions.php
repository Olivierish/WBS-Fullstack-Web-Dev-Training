<?php 
function e($value){
    return htmlspecialchars($value, ENT_QUOTES,'UTF-8',true);
}
function pageTitle(){
    /** 
     * GROBAL
     * Pour qu'il sache qu'on veut utiliser la variable global déja défini. sinon il creera une nouvelle var $page.
     * l'avantage est qu'on ne sera pas obligé de passer la var en paramètre de la fonction.  
    */
    global $page; 
    switch ($page) {
        case 'about': echo ' - About'; break;
        case 'entries': echo ' - Gästebuch'; break;
        case 'kontakt': echo ' - Kontakt'; break;

        
        default:
            echo ' - Startseite'; break;
    }
}
?>