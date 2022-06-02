<?php
$page = "lietotaji";
require "header.php";
?>

<div class="box-container">
    <div class="boxInfo">
    <!-- <div class="search">
      <input type="text" class="searchTerm" placeholder="Meklēt pēc vārda vai uzvārda">
      <button type="submit" class="searchButton">
        <i class="fas fa-search"></i>
     </button>
    </div> -->
    <table>
                <tr>
                    <th>
                        Vārds
                    </th>
                    <th>
                        Adrese
                    </th>
                    <th>
                        E-Pasts
                    </th>
                    <th>
                        Tālrunis
                    </th>

                    <th>
                    Dzēst
                    </th>
                </tr>
                <?php

                require("../connect_db.php");
                $lietotajs = $_SESSION['users'];
                $lietotajuVaicajums = "SELECT * FROM lietotajs";
                $atlasaLietotajus = mysqli_query($savienojums, $lietotajuVaicajums) or die("Nekorekts Vaicajums!");

                while($row = mysqli_fetch_assoc($atlasaLietotajus)){

                    echo "

                    <tr>
                        <td>{$row['vards']} {$row['uzvards']}</td>
                        <td>{$row['pilseta']}, {$row['iela']} {$row['ielas_nr']}, {$row['dzivokla_nr']}</td>
                        <td>{$row['epasts']}</td>
                        <td>{$row['talrunis']}</td>
                        <td>
                            <form action='dzestLiet.php' method='POST'>
                            <button type='submit' name='izdzest' value='{$row['lietotajs_id']}'>
                            <i class='fas fa-trash'></i>
                            </button>
                            </form>
                            </td>
                    </tr>
                    ";
                }
    ?>    
            </table> 
</div>