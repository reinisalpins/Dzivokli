<?php
$page = "profils";
require "header.php";
?>

<div class="formContainer">
            <h1 class="title">Reģistrēties portālam</h1>

            <?php
                    require("connect_db.php");

                    if(isset($_POST['saglabat'])) {
                $vards= $_POST['vards'];
                $uzvards= $_POST['uzvards'];
                $epasts= $_POST['epasts'];
                $parole= $_POST['parole'];
                $paroleHash = password_hash($parole, PASSWORD_DEFAULT);
                $talrunis= $_POST['talrunis'];
                $dzimDat= $_POST['dzimDat'];
                $valsts= $_POST['valsts'];
                $pilseta= $_POST['pilseta'];
                $iela= $_POST['iela'];
                $ielasNr= $_POST['ielasNr'];
                $dzivoklaNr= $_POST['dzivoklaNr'];

                $sql = "SELECT * FROM lietotajs WHERE epasts = '$epasts'";
                $res = mysqli_query($savienojums, $sql);

                if(mysqli_num_rows($res) > 0){
                    echo "<div class='alert sarkans'>Lietotājs ar šādu e-pasta adresi jau pastāv, izmantojiet citu e-pastu</div>";
                }else{
                    $registretKlientu = "INSERT INTO lietotajs (lietotajs_id, vards, uzvards, epasts, parole, talrunis, dzim_dat, valsts, pilseta, iela, ielas_nr, dzivokla_nr)
                VALUES (null, '$vards', '$uzvards', '$epasts', '$paroleHash', '$talrunis', '$dzimDat', '$valsts', '$pilseta', '$iela', '$ielasNr', '$dzivoklaNr')";

               
                    if(mysqli_query($savienojums, $registretKlientu)){ 
                        
                    $dirname = "lietotaji/".$vards.$uzvards;
                mkdir($dirname);

                    echo "<div class='alert zals'>Esat veiksmīgi reģistrējies, tagad varat ielogoties! </div>";
                    header("Refresh:1; url=login.php");
                         }else{
                            echo "<div class='alert'> Kluda, meginiet velreiz!</div>";
                }
            }
                } 
                ?>

            <div class="register-container">
                <form action="" method="POST">
                    <h1>Vārds un Uzvārds</h1>
                
                    <div class="inline">
                        <input type="text" name="vards" placeholder="Vārds" required>
                        <input type="text" name="uzvards" placeholder="Uzvārds" required>
                    </div>
                    <h1>E-Pasts</h1>
                
                <div class="inline">
                    <input type="email" name="epasts" placeholder="E-Pasts" required>
                </div>
                <h1>Parole</h1>
                
                <div class="inline">
                    <input type="password" name="parole" placeholder="Parole" required>
                </div>
                <h1>Tālrunis</h1>
                
                <div class="inline">
                    <input type="number" name="talrunis" min="0" max="99999999" placeholder="Tālrunis" required>
                </div>
                    <h1>Dzimšanas Datums</h1>
                    <div class="inline">
                        <input type="date" name="dzimDat" min="1920-01-01" max="2022-05-31" required>
                    </div>
                    <h1>Adrese</h1>
                    <div class="inline">
                        <input type="text" name="valsts" placeholder="Valsts" required >
                        <input type="text" name="pilseta" placeholder="Pilsēta" required>
                        <input type="text" name="iela" placeholder="Iela" required>
                        <input type="text" name="ielasNr" placeholder="Ielas nr." required>
                        <input type="text" name="dzivoklaNr"placeholder="Dzīvokļa nr." >
                    </div>

                    <input type="submit" name="saglabat" class="poga" value="Reģistrēties">
                </form>

            </div>
</div>