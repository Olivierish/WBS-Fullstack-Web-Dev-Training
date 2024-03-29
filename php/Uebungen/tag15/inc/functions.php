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
        case 'entries': echo ' - Guestbook'; break;
        case 'contact': echo ' - Contact'; break;
        case 'impressum': echo ' - Impressum'; break;

        
        default:
            echo ' - Home'; break;
    }
}

/**
 * A function to truncate a text
 * 
 *
 *
 * @param string $text The text to truncate
 * @param int $length Optional. The length of the new text.
 * @return string a new truncated text.
 */
function truncate(string $text, int $length = 20): string {
    if (strlen($text) <= $length) {
        return $text;
    }
    $text = substr($text, 0, $length);
    $text = substr($text, 0, strrpos($text, " "));
    $text .= "...";
    return $text;
}
?>