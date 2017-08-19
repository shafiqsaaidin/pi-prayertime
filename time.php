<?php
	require_once 'api.php';
    echo '<script src="js/myjs.js"></script>';

    // Display date in H:M:S
    $displayTime =  date("g:i:s");
    //$displayDate = date('D,d F Y');
    $checkDate = date("g:i a");

    echo $displayTime;

    switch($checkDate){
        case "$subuh":
            echo '<script>azanSubuh()</script>';
            break;
        case "$zohor":
            echo '<script>play()</script>';
            break;
        case "$asar":
            echo '<script>play()</script>';
            break;
        case "$maghrib":
            echo '<script>play()</script>';
            break;
        case "$isyak":
            echo '<script>play()</script>';
            break;
    }
?>
