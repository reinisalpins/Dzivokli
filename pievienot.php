<?php
$page = "pievienot";
require "header.php";
?>


<section class="pievienot">
    <?php
            session_start();
            

            if(isset($_SESSION['user'])){
                require("connect_db.php");
                $lietotajs = $_SESSION['user'];
                if(isset($_POST['pievienot'])){
                    $Apraksts = $_POST['apraksts'];
                    $Pilseta = $_POST['pilseta'];
                    $Valsts = $_POST['valsts'];
                    $Iela = $_POST['iela']; 
                    $IelasNr = $_POST['ielas_nr'];
                    $DzivNr = $_POST['dzivokla_nr'];
                    $Cena = $_POST['cena'];
                    $Majdzivnieki = $_POST['majdzivnieki'];
                    $image = $_FILES['image']['name'];
                    $image2 = $_FILES['image2']['name'];
                    $image3 = $_FILES['image3']['name'];

                        $lietotajsVaicajums = "SELECT * FROM lietotajs where lietotajs_id = '$lietotajs'";
                        $query = $savienojums->query($lietotajsVaicajums);
                        $row = $query->fetch_assoc();

                        $dirname = "lietotaji/".$row['vards'].$row['uzvards']."/sludinajums".$Iela.$IelasNr.$DzivNr;
                        mkdir($dirname);


                    $target = "lietotaji/".$row['vards'].$row['uzvards']."/sludinajums".$Iela.$IelasNr.$DzivNr."/".basename($image);
                    $target2 = "lietotaji/".$row['vards'].$row['uzvards']."/sludinajums".$Iela.$IelasNr.$DzivNr."/".basename($image2);
                    $target3 = "lietotaji/".$row['vards'].$row['uzvards']."/sludinajums".$Iela.$IelasNr.$DzivNr."/".basename($image3);

                    


                    $pievienotSludinajumu = "INSERT INTO sludinajums(sludinajums_id, lietotajs_id, apraksts, cena, majdzivnieki, valsts, pilseta, iela, ielas_nr, dzivokla_nr, prieksskatijuma_attels, attels_2, attels_3)
                    VALUES(NULL, '$lietotajs','$Apraksts', '$Cena', '$Majdzivnieki', '$Valsts', '$Pilseta', '$Iela', '$IelasNr', '$DzivNr', '$image', '$image2', '$image3')";

                    if($image !== $image2 && $image !== $image3 && $image2 !== $image3){
                        if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['image2']['tmp_name'], $target2)
                        && move_uploaded_file($_FILES['image3']['tmp_name'], $target3)) {



                         if(mysqli_query($savienojums, $pievienotSludinajumu)){

                        echo "<div class='alert zals'>Sludinajums pievienots veiksmigi! </div><br><br>";
                        header("Refresh:1; url=maniSludinajumi.php");
                            
                        }else{
                            echo "<div class='alert sarkans'> Kluda, meginiet velreiz!</div><br>";
                        }

                    }else{
                        $msg = "Kluda pievienojot attelus";
                    }
                    }else{
                        echo "<div class='alert sarkans'> Kluda, izvēlieties atšķirīgus attēlus!</div><br>";
                        rmdir($dirname);
                    }
                    
                }
               
            ?>
    <h1>Pievieno savu sludinājumu</h1>
    <hr>
<form enctype="multipart/form-data" action="pievienot.php" method="POST">
    <label for="">Apraksts</label>
    <textarea placeholder="Apraksts" name="apraksts" required></textarea>
    <hr>
    <label for="">Atrašanās vieta</label>
    <input type="text" name="valsts" placeholder="Valsts" required>
    <input type="text" name="pilseta" placeholder="Pilsēta" required>
    <input type="text" placeholder="Iela" name="iela" required>
    <input type="text" placeholder="Ielas numurs" name="ielas_nr" required>
    <input type="number" placeholder="Dzīvokļa numurs" name="dzivokla_nr">
    <hr>
    <label for="">Cena diennaktī</label>
    <input type="number" min="1" name="cena" placeholder="Cena" required>
    <hr>
    <label for="">Papildus informācija</label>
    <h2>Vai mājoklī atļauti mājdzīvnieki?</h2>

    <label class="container">Jā
        <input type="radio" checked="checked" name="majdzivnieki" value="Atļauti">
        <span class="checkmark"></span>
    </label>
    <label class="container">Nē
  <input type="radio" name="majdzivnieki" value="Aizliegti">
  <span class="checkmark"></span>
    </label>
    <hr>



    <label for="">Attēli</label>
    <p class="var5"><span class="var6">* </span>Visiem attēliem jābūt atšķirīgiem</p>
        <h2>Priekšskatījuma attēls</h2>
    <input class="attels" name="image" type="file" accept="image/*" required>
    <h2>2. Attēls</h2>
    <input class="attels" name="image2" type="file" accept="image/*" required>
    <h2>3. Attēls</h2>
    <input class="attels" name="image3" type="file" accept="image/*" required>
    <hr>
    
    
    <input type="submit" name="pievienot" class="poga" value="Pievienot sludinājumu">
</form>

    

        
   
</section>

<?php
 require "footer.php"; ?>
<?php
}else{
                header("Location: login.php");
            }
?>
       