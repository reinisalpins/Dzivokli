<?php
$page = "profils";
require "header.php";
?>

<section class="profils">
   <div class="side-info">
        <ul>
            <li>
                <a  href="profils.php">Mans profils</a>
            </li>
            <li>
                <a href="maniSludinajumi.php">Mani sludinājumi</a>
            </li>
            <li>
                <a href="manasRezervacijas.php">Manas rezervācijas</a>
            </li>
            <li>
                <a href="redigetProfilu.php">Rediģēt profilu</a>
            </li>
            <li>
                <a class="active" >Dzēst profilu</a>
            </li>
        </ul>
    </div> 

    <div class="main-info">
        <div class="box-container">
            <div class="dzestProfilu">
                <h1>Vai esat pārliecināts ka gribat dzēst savu profilu?</h1>
                <h2>Dzēšot profilu tiks dzēsti visi jūsu dati un sludinājumi</h2>
                <h2>Lai dzēstu profilu jāievada profila parole</h2>
                <form action="">
                    <input type="password" placeholder="Parole">
                    <button class="poga">Dzēst profilu</button>
                </form>
            </div>
            
    </div>
</div>