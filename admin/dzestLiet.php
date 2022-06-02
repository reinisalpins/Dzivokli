<?php
$page = "admin";
require "header.php";
?>

<div class="main-info">
    <div class="box-container">
    <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require("../connect_db.php");
                    if(isset($_POST['izdzest'])){
                        $ID = $_POST['izdzest'];

                        $sql = "DELETE FROM sludinajums WHERE lietotajs_id = '$ID'";
                        $sql3= "DELETE FROM atsauksmes WHERE lietotajs_id = '$ID'";
            
            
                        $sql4 = "SELECT * FROM sludinajumi WHERE lietotajs_id = '$ID'";
                        $query = $savienojums->query($sql4);
                        $row = $query->fetch_assoc();
            
                        $filename = '../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['prieksskatijuma_attels'];
                        $filename2 = '../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_2'];
                        $filename3 = '../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_3'];
            
                        if(file_exists($filename) && file_exists($filename2) && file_exists($filename3)){
                            if (unlink('../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['prieksskatijuma_attels']) && 
                                        unlink('../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_2']) 
                                        && unlink('../lietotaji/'.$row['vards'].$row['uzvards'].'/sludinajums'.$row['iela'].$row['ielas_nr'].$row['dzivokla_nr']."/".$row['attels_3']))
                                        {
                                            if($savienojums->query($sql3)){
                                                if($savienojums->query($sql)){
                                            $sql1 = "DELETE FROM lietotajs WHERE lietotajs_id = '$ID'";
            
                                            $dirname = "../lietotaji/".$row['vards'].$row['uzvards']."/sludinajums".$row['iela'].$row['ielas_nr'].$row['dzivokla_nr'];
                                            rmdir($dirname);
                                            $dirname2 = $dirname = "../lietotaji/".$row['vards'].$row['uzvards'];
                                            rmdir($dirname2);
            
                                            if($savienojums->query($sql1)){
                                                echo "<div class='alert zals'>Profils veiksmigi dzests</div>";
                                                 header("Refresh:1; url=lietotaji.php");
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
                                $sql = "SELECT * FROM lietotajs WHERE lietotajs_id = '$ID'";
                                $query = $savienojums->query($sql);
                                $row = $query->fetch_assoc();
            
                                $dirname = "../lietotaji/".$row['vards'].$row['uzvards'];
                                rmdir($dirname);
                                if($savienojums->query($sql)){
                               
                                $sql1 = "DELETE FROM lietotajs WHERE lietotajs_id = '$ID'";
            
                                if($savienojums->query($sql1)){
                                    echo "<div class='alert zals'>Profils veiksmigi dzests</div>";
                                    header("Refresh:1; url=lietotaji.php");
                                }
                                else{
                                    echo "<div class='alert sarkans'>nepareizs vaicajums!</div>";
                                }
                            }
                        
                            }else{
                                echo "<div class='alert sarkans'>nepareizs vaicajums!</div>";
                            }
                        }}
                    }else{
                            echo "<div class='alert sarkans'>Kaut kas nogaja greizi! Atgriezties <a href='lietotaji.php'>iepriekseja lapā</a></div>";
                    }
            ?>
    </div>
</div>