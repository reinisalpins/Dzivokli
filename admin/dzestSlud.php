
<?php
$page = "admin";
require "header.php";
?>

<div class="main-info">
    <div class="box-container">
    <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require("../connect_db.php");
                    if(isset($_POST['dzest'])){
                        $ID = $_POST['dzest'];

                        $sisSludinajumsVaicajums = "SELECT * FROM sludinajumi WHERE sludinajums_id = '$ID'";
                        $query = $savienojums->query($sisSludinajumsVaicajums);
                        $row = $query->fetch_assoc();


                        If (unlink('../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['prieksskatijuma_attels']) && 
                        unlink('../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_2']) 
                        && unlink('../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_3']))
                         {

                            $dirname = "../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}";
                            if(rmdir($dirname))
                            {
                            $deleteVaicajums = "DELETE FROM sludinajums WHERE sludinajums_id = '$ID'";
                            $delete2Vaicajums = "DELETE FROM atsauksmes WHERE sludinajums_id = '$ID'";

                            if(mysqli_query($savienojums, $delete2Vaicajums)){
                                if(mysqli_query($savienojums, $deleteVaicajums)){
                            echo "<div class='alert zals'>Sludinājums dzēsts</div>";
                            header("Refresh:1; url=sludinajumi.php");
                        }else{
                            echo "<div class='alert sarkans'>Neizdevās dzēst sludinājumu</div>";
                            header("Refresh:1; url=sludinajumi.php");
                        }
                            }else{
                                echo "<div class='alert sarkans'>Neizdevās dzēst sludinājumu</div>";
                            header("Refresh:1; url=sludinajumi.php");
                            }

                        
                            }
                            else
                            {
                            echo ($dirname . "couldn't be removed"); 
                            }


                        


                            
                          } else {
                            echo "<div class='alert sarkans'>Problema dzesot attelus</div>";
                          }
                       
                    }}else{
                            echo "<div class='alert sarkans'>Kaut kas nogaja greizi! Atgriezties <a href='maniSludinajumi.php'>iepriekseja lapā</a></div>";
                    }
            ?>
    </div>
</div>