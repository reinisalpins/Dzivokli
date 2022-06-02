<?php
$page = "profils";
require "header.php";
$page2 = "rediget";
require "profilaNavbar.php";
?>


    <div class='main-info'>
        <div class='box-container'>
           

    <?php
            require("connect_db.php");
            $lietotajs = $_SESSION['user'];
            if(isset($_POST['rediget'])){

                $vards= $_POST['vards'];
                $uzvards= $_POST['uzvards'];
                $talrunis= $_POST['talrunis'];
                $valsts= $_POST['valsts'];
                $pilseta= $_POST['pilseta'];
                $iela= $_POST['iela'];
                $ielasNr= $_POST['ielasNr'];
                $dzivNR= $_POST['dzivNR'];

                $lietotajsVaicajums = "SELECT * FROM lietotajs where lietotajs_id = '$lietotajs'";
                $query = $savienojums->query($lietotajsVaicajums);
                $row = $query->fetch_assoc();

                


                $redigetProfiluVaicajums= "UPDATE lietotajs SET vards = '$vards', uzvards = '$uzvards',
                talrunis = '$talrunis',valsts = '$valsts',pilseta = '$pilseta', iela = '$iela', ielas_nr = '$ielasNr', dzivokla_nr = '$dzivNR' WHERE lietotajs_id = '$lietotajs'"; 
                
                $old_name = "lietotaji/".$row['vards'].$row['uzvards']; 
                
                // New Name For The File
                $new_name = "lietotaji/".$vards.$uzvards; 
                

                if(rename( $old_name, $new_name))
                    { 
                    if(mysqli_query($savienojums, $redigetProfiluVaicajums)){

                    echo "<div class='alert zals'>profils veiksmigi rediģēts! </div>";
                    header("Refresh:1; url=profils.php");
                 }else{
                     echo "<div class='alert sarkans'> Kluda!</div>";
                }

                    }
                    else
                    {
                        echo "<div class='alert sarkans'> Kluda!</div>";
                    }

               

            }else{
                $redigetVaicajums = "SELECT * FROM lietotajs WHERE lietotajs_id = '$lietotajs'";

                $atlasaLietotaju = mysqli_query($savienojums, $redigetVaicajums) or die("Nekorekts vaicajums!");

                while($row = mysqli_fetch_assoc($atlasaLietotaju)){
                    echo " <div class='redigetProfilu'>
                                <form action='' method='POST'>
                                <h2>Vārds</h2>
                                <input type='text' name='vards' value='{$row['vards']}' required>
                                <h2>Uzvārds</h2>
                                <input type='text' name='uzvards' value='{$row['uzvards']}' required>

                                <h2>Tālrunis</h2>

                                <input type='text' name='talrunis' value='{$row['talrunis']}' required>

                                <h2>Valsts</h2>
                                <input type='text' name='valsts' value='{$row['valsts']}' required>
                                
                                <h2>Pilsēta</h2>
                                <input type='text' name='pilseta' value='{$row['pilseta']}' required>
                            </div>
                                <div class='redigetProfilu'>

                                
                                
                               
                                
                                <h2>Iela</h2>
                                <input type='text' name='iela' value='{$row['iela']}' required>
                                <h2>Ielas nr</h2>
                                <input type='text' name='ielasNr' value='{$row['ielas_nr']}' required>
                                <h2>Dzīvokļa nr. (ja tāds ir)</h2>
                                <input type='text' name='dzivNR' value='{$row['dzivokla_nr']}'>


                                <input type='submit' class='poga' name='rediget' value='Saglabat'/>
                            </form>

                           
                                    </div>
                                </div>
                            </div>
                    
                    ";
                }
            }
    ?>

   
