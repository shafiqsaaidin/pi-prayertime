<?php

    //$zon = "kdh03";
    $myfile = fopen("./text/zon.txt", "r") or die("Unable to open file!");
    $zon = fread($myfile,filesize("./text/zon.txt"));
    $url = file_get_contents('http://api.azanpro.com/times/today.json?zone='.$zon.'&format=12-hour');

    $json = json_decode($url, true);


    $time = $json[prayer_times];
    $location = $json[locations];

    #echo "Waktu Subuh:".($time['subuh']);

    $kawasan = '';

    foreach($location as $x){
        $kawasan = $kawasan.$x.", ";
    }

    $imsak = $time[imsak];
    $subuh = $time[subuh];
    $zohor = $time[zohor];
    $asar = $time[asar];
    $maghrib = $time[maghrib];
    $isyak = $time[isyak];

    $waktuAzan = array("imsak"=>"$imsak", "subuh"=>"$subuh", "zohor"=>"$zohor", "asar"=>"$asar", "maghrib"=>"$maghrib", "isyak"=>"$isyak");
?>