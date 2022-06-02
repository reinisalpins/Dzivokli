<?php
$page = "profils";
require "header.php";
$page2 = "atsauksmes";
require "profilaNavbar.php";
?>

<div class='main-info'>
        <div class='box-container'>
            <div class='informacija'>
                    <table>
                        <tr>
                            <th>Sludinājums</th>
                            <th>Atsauksme</th>
                            <th>Vērtējums</th>
                            <th>Dzēst</th>

                            <?php
            require("connect_db.php");
            $lietotajs = $_SESSION['user'];
            $atsauksmesVaicajums = "SELECT * FROM atsauksmeJoin WHERE lietotajs_id = '$lietotajs'";
            $atlasaAtsauksmes = mysqli_query($savienojums, $atsauksmesVaicajums) or die("Nekorekts Vaicajums!");

            while($row = mysqli_fetch_assoc($atlasaAtsauksmes)){

                echo "

                            <tr>
                            <td>{$row['valsts']}, {$row['pilseta']} {$row['iela']} {$row['ielas_nr']} {$row['dzivokla_nr']}</td>
                            <td>{$row['atsauksme']}</td>
                            <td>{$row['vertejums']}</td>
                            <td>
                            <form action='dzestAtsauksmi.php' method='POST'>
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