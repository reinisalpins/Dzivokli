<?php
require "header.php";
?>

<?php
 

 session_start();
 

 if(isset($_SESSION['user'])){
    $lietotajs = $_SESSION['user'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require("connect_db.php"); 
    
        if(isset($_POST['submit'])){
            $atsauksme = $_POST['atsauksme'];
            $vertejums = $_POST['vertejums'];
            $ID = $_POST['submit'];

            $atsauksmeVaicajums = "INSERT INTO atsauksmes(atsauksmes_id, atsauksme, vertejums, lietotajs_id, sludinajums_id, datums)
            VALUES(NULL, '$atsauksme', '$vertejums', '$lietotajs', '$ID', now())";

            if(mysqli_query($savienojums, $atsauksmeVaicajums)){
                header("Location: manasAtsauksmes.php");
            }else{
                echo "<br><br><br><br><br>
                <br><div class='alert sarkans'> Kluda, meginiet velreiz!</div><br>";
                echo mysqli_error($savienojums);
            }


        }else{
            echo "<br><br><br><br><br>
                <br><div class='alert sarkans'> Kluda, meginiet velreiz!</div><br>";
        }

}

 ?>
      <?php
}else{
    echo "<br>
    <br>
    <br>
    <br>
    <br>
    <br><div class='alert sarkans'>Ludzu ielogojieties <a style='color:#fff' href='login.php'>šeit</a> lai pievienotu atsauksmi!</div>";
            }
?>
       