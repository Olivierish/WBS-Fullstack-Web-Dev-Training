<?php
function bereinige($userEingabe, $encoding='UTF-8'){
    // return htmlentities(strip_tags(trim($userEingabe)),ENT_QUOTES | ENT_HTML5, $encoding);
    return htmlentities(trim($userEingabe),ENT_QUOTES | ENT_HTML5, $encoding);
}

function ziechenEntfernen($zeichen){
    $suche = [
        '{',
        '}',
        '(',
        ')',
        '='
         ];

    return str_replace($suche, '', $zeichen);
}
?>