<?php
function displayDate(){
    $monaten = array(
        1 => 'Januar',
        2 => 'Februar',
        3 => 'März',
        4 => 'April',
        5 => 'Mai',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'August',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Dezember'
    );
    $tage = array(
        'Sonntag',
        'Montag',
        'Dienstag',
        'Mittwoch',
        'Donnerstag',
        'Freitag',
        'Samstag'
    );

    return $tage[date('w')].' '.date('d').'. '.$monaten[date('n')].', '.date('Y');
}

function rechnenMitWaehrung($euro, $w){
    $summe = 0;
    switch ($w) {
        case 'dollars':
            $summe = $euro * 1.23;
            break;
        case 'yen':
            $summe = $euro * 113;
            break;
        case 'pfund':
            $summe = $euro * 0.83;
            break;
        case 'tuerkLira':
            $summe = $euro * 1.93;
            break;
    }
    return $summe;
}
function displayMsg($titel='',$beschreibung,$success=false){
                if(!$success){
                    echo '<div id="messageBox" class="card bg-danger mb-3 col-md-6 text-light" style="margin: 0 auto;">';
                    echo '<div class="card-header text-center">Error</div>';
                }
                else{
                    echo '<div id="messageBox" class="card bg-info mb-3 col-md-6 text-light" style="margin: 0 auto;">';
                    echo '<div class="card-header text-center">Ergebnis</div>';
                }
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$titel.'</h5>';
                echo '<p class="card-text">'.$beschreibung.'</p>';
                echo '</div>';
                echo '</div>';
}

/**
 * Summary of isRadioChecked
 * @param mixed $waehrung_benutzer
 * @param mixed $waehrung
 * @return string
 */
function isRadioChecked($waehrung_benutzer, $waehrung){
    var_dump($waehrung_benutzer);
        return (($waehrung_benutzer === $waehrung)? 'checked' : ''); 
}
?>