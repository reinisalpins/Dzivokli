<?php
    $serveravards = "eu-cdbr-west-02.cleardb.net";
    $lietotajsvards = "	b2db0eb342de93";
    $parole = "eac36859";
    $dbvards="heroku_89e522370f3c816";

    $savienojums = mysqli_connect($serveravards, $lietotajsvards, $parole, $dbvards);

    if(!$savienojums){
        die("Pieslegties neizdevās: ".mysqli_connect_error());
    }
    ?>