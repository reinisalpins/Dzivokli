<?php
$page = "profils";
require "header.php";
$page2 = "dzest";
require "profilaNavbar.php";
?>
<div class="main-info">
        <div class="box-container">
            <div class="dzestProfilu">

<?php

    $lietotajs = $_SESSION['user'];
    require("connect_db.php");
    if(isset($_POST['delete'])){
        $parole = $_POST['parole'];

        $sql = "SELECT * FROM lietotajs WHERE lietotajs_id = '$lietotajs'";
        $query = $savienojums->query($sql);
        $row = $query->fetch_assoc();

        if(password_verify($parole, $row['parole'])){
            $sql = "DELETE FROM sludinajums WHERE lietotajs_id = '$lietotajs'";
            $sql3= "DELETE FROM atsauksmes WHERE lietotajs_id = '$lietotajs'";


            $sql4 = "SELECT * FROM sludinajumi WHERE lietotajs_id = '$lietotajs'";
            $query = $savienojums->query($sql4);
            $row = $query->fetch_assoc();

            $filename = 'lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['prieksskatijuma_attels'];
            $filename2 = 'lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_2'];
            $filename3 = 'lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_3'];

            if(file_exists($filename) && file_exists($filename2) && file_exists($filename3)){
                if (unlink('lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['prieksskatijuma_attels']) && 
                            unlink('lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_2']) 
                            && unlink('lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_3']))
                            {
                                if($savienojums->query($sql3)){
                                    if($savienojums->query($sql)){
                                $sql1 = "DELETE FROM lietotajs WHERE lietotajs_id = '$lietotajs'";

                                $dirname = "lietotaji/".$row['vards'].$row['uzvards']."/sludinajums".$row['iela'].$row['ielas_nr'].$row['dzivokla_nr'];
                                rmdir($dirname);
                                $dirname2 = $dirname = "lietotaji/".$row['vards'].$row['uzvards'];
                                rmdir($dirname2);

                                if($savienojums->query($sql1)){
                                    echo "<div class='alert zals'>Profils veiksmigi dzests</div>";
                                    session_destroy();
                                     header("Refresh:1; url=login.php");
                                }
                                else{
                                    echo "<div class='alert sarkans'>nepareizs vaicajums!</div>";
                                }
                            }
                        
                            }else{
                                echo "<div class='alert sarkans'>nepareizs vaicajums!</div>";
                            }
                                            
                                }
            }else{
                if($savienojums->query($sql3)){ 
                    $sql = "SELECT * FROM lietotajs WHERE lietotajs_id = '$lietotajs'";
                    $query = $savienojums->query($sql);
                    $row = $query->fetch_assoc();

                    $dirname = "lietotaji/".$row['vards'].$row['uzvards'];
                    rmdir($dirname);
                    if($savienojums->query($sql)){
                   
                    $sql1 = "DELETE FROM lietotajs WHERE lietotajs_id = '$lietotajs'";

                    if($savienojums->query($sql1)){
                        echo "<div class='alert zals'>Profils veiksmigi dzests</div>";
                        session_destroy();
                        header("Refresh:1; url=login.php");
                    }
                    else{
                        echo "<div class='alert sarkans'>nepareizs vaicajums!</div>";
                    }
                }
            
                }else{
                    echo "<div class='alert sarkans'>nepareizs vaicajums!</div>";
                }
            }

        }else{
            echo "<div class='alert sarkans'>Nepareiza parole!</div>";
        }

    }

?>
                <h1>Vai esat pārliecināts ka gribat dzēst savu profilu?</h1>
                <h2>Dzēšot profilu tiks dzēsti visi jūsu dati un sludinājumi</h2>
                <h2>Lai dzēstu profilu jāievada profila parole</h2>
                <form action="" method="POST">
                    <input type="password" name="parole" placeholder="Parole">
                    <button type="submit" name="delete" class="poga">Dzēst profilu</button>
                </form>
            </div>
            
    </div>
</div>