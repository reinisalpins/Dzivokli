<?php
    $serveravards = "sql109.epizy.com";
    $lietotajsvards = "	epiz_31874211";
    $parole = "jh2iELCuVKYcR";
    $dbvards="epiz_31874211_dzivokli";

    $savienojums = mysqli_connect($serveravards, $lietotajsvards, $parole, $dbvards);

    if(!$savienojums){
        die("Pieslegties neizdevās: ".mysqli_connect_error());
    }
    ?>