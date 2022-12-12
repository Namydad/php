multiple arrays
$mw = array(4,5,7,8,10);
function höchstwert($mw){
    asort($mw);
    $count = count($mw)-1;
    $höchstwert = $mw[$count];
    return $höchstwert;

}
function tiefstwert($mw){
    asort($mw);
    $tiefstwert = $mw[0];
    return $tiefswert;
}
function durchschnitt($mw){
    $durchschnitt = array_sum($mw) / count($mw);
    return $durchschnitt;
}

one function

$mw = array(4,5,7,8,10);

function mwauswertung($mw){
    echo array_min($mw);
    echo array_max($mw);
    $durchschnitt = array_sum($mw) / count($mw);
    echo $durchschnitt
}
