<?php
$page = "profils";
require "header.php";
$page2 = "galvena";
require "profilaNavbar.php";
?>

    
    <?php 
                require("connect_db.php");
                $lietotajs = $_SESSION['user'];
                $profilaVaicajums = "SELECT * FROM lietotajs WHERE lietotajs_id = '$lietotajs'";
                $atlasaProfilu = mysqli_query($savienojums, $profilaVaicajums) or die("Nekorekts Vaicajums!");

                while($row = mysqli_fetch_assoc($atlasaProfilu)){
                    echo"
    <div class='main-info'>
        <div class='box-container'>
            <div class='informacija'>
                    <ul>
                        <li>Vārds: {$row['vards']}</li>
                        <hr>
                        <li>Uzvārds: {$row['uzvards']}</li>
                        <hr>
                        <li>Tālrunis: {$row['talrunis']}</li>
                        <hr>
                        <li>Dzimšanas datums: {$row['dzim_dat']}</li>
                        <hr>
                        <li>E-pasts: {$row['epasts']}</li>
</ul>
            </div>
            <div class='informacija'>
                    <ul>
                        <li>Valsts: {$row['valsts']}</li>
                        <hr>
                        <li>Pilsēta: {$row['pilseta']}</li>
                        <hr>
                        <li>Adrese: {$row['iela']} {$row['ielas_nr']} {$row['dzivokla_nr']}</li>
                        <hr>
                    </ul>
            </div>
        </div>
    
    </div>
</section>
                ";
                }
            ?>

