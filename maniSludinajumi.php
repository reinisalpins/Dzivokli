<?php
$page = "profils";
require "header.php";
$page2 = "sludinajumi";
require "profilaNavbar.php";
?>



<div class='main-info'>
        <div class='box-container'>
            <div class='informacija'>
                    <table>
                        <tr>
                            <th>Apraksts</th>
                            <th>Atrašanās vieta</th>
                            <th>Mājdzīvnieki</th>
                            <th>Cena</th>   
                            <th>Rediģēt</th>
                            <th>Dzēst</th>
                        

    <?php
            require("connect_db.php");
            $lietotajs = $_SESSION['user'];
            $sludinajumaVacicajums = "SELECT * FROM sludinajums WHERE lietotajs_id = '$lietotajs'";
            $atlasaSludinajumus = mysqli_query($savienojums, $sludinajumaVacicajums) or die("Nekorekts Vaicajums!");

            while($row = mysqli_fetch_assoc($atlasaSludinajumus)){

                echo "

                            <tr>
                            <td>{$row['apraksts']}</td>
                            <td>{$row['valsts']}, {$row['pilseta']} {$row['iela']} {$row['ielas_nr']} {$row['dzivokla_nr']}</td>
                            <td>{$row['majdzivnieki']}</td>
                            <td> {$row['cena']} € dienā</td>
                            <td>
                            <form action='redigetSludinajumu.php' method='POST'>
                            <button type='submit' name='apskatit' value='{$row['sludinajums_id']}'>
                            <i class='fas fa-edit'></i>
                            </button>
                            </form>
                            </td>
                            <td>
                            <form action='dzestSludinajumu.php' method='POST'>
                            <button type='submit' name='delete' value='{$row['sludinajums_id']}'>
                            <i class='fas fa-trash'></i>
                            </button>
                            </form>
                            </td>
                            </tr>
                            </td>
                            </tr>
                            </tr>
                            
                       
                    
                
                
                ";
            }     
    
    ?>
    </table>
            </div>
        </div>
    
    </div>