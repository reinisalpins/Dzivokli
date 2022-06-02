<?php
$page = "profils";
require "header.php";
?>

<?php
session_start();


if(isset($_SESSION['user'])){

}else{
   header("Location: login.php");
}

?>

           
<section class='profils'>
   <div class='side-info'>
        <ul>
            <li><a href='profils.php' class=" <?php echo($page2 == "galvena" ? "active" : ""); ?>">Mans profils</a></li>
            <li> <a href='maniSludinajumi.php' class=' <?php echo($page2 == "sludinajumi" ? "active" : ""); ?>'>Mani sludinājumi</a></li>
            <li><a href='redigetProfilu.php' class="<?php echo($page2 == "rediget" ? "active" : ""); ?>">Rediģēt profilu</a></li>
            <li><a href='manasAtsauksmes.php' class="<?php echo($page2 == "atsauksmes" ? "active" : ""); ?>">Manas atsauksmes</a></li>
            <li><a href='mainitParoli.php' class="<?php echo($page2 == "mainit" ? "active" : ""); ?>" >Mainīt paroli</a></li>
            <li><a href='dzestProfilu.php' class="<?php echo($page2 == "dzest" ? "active" : ""); ?>">Dzēst profilu</a></li>
            <li><a href='logout.php'>Izlogoties</a></li>
        </ul>
    </div>