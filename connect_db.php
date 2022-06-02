<?php
    $serveravards = "localhost:3309";
    $lietotajsvards = "root";
    $parole = "";
    $dbvards="majokli";

    $savienojums = mysqli_connect($serveravards, $lietotajsvards, $parole, $dbvards);

    if(!$savienojums){
        die("Pieslegties neizdevās: ".mysqli_connect_error());
    }
    ?>