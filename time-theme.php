<?php
function timetheme1() {
$h = date('H:i:s');
$h10 = date('10:00:00');
$h22 = date('22:00:00');
if (($h >= $h10) && ($h <= $h22)) {
    //echo "день  <br> $h > $h10";
    return '<link rel="stylesheet" type="text/css" href="styles/style-day.css"';
    } else {
    //echo "Ночь <br>  $h < $h10";
    return '<link rel="stylesheet" type="text/css" href="styles/style-night.css"';
    }
}
?>