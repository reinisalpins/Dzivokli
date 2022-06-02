<?php
$page = "atsauksmes";
require "header.php";
?>

<div class="box-container">
    <div class="boxInfo">
    <table>
                <tr>
                <th>Sludinājums</th>
                            <th>Atsauksme</th>
                            <th>Vērtējums</th>
                            <th>Kurš vērtēja?</th>
                            <th>Dzēst</th>
                </tr>
                <?php

                require("../connect_db.php");
                $atsauksmeVaicajums = "SELECT * FROM atsauksmeJoin";
                $atlasaAtsauksmes = mysqli_query($savienojums, $atsauksmeVaicajums) or die("Nekorekts Vaicajums!");

                    while($row = mysqli_fetch_assoc($atlasaAtsauksmes)){

                        echo "

                            <tr>
                            <td>{$row['valsts']}, {$row['pilseta']}, {$row['iela']} {$row['ielas_nr']}</td>
                            <td>{$row['atsauksme']}</td>
                            <td>{$row['vertejums']}</td>
                            <td>{$row['vards']} {$row['uzvards']}</td>
                            <td>
                            <form action='dzestAtsauksmi.php' method='POST'>
                            <button type='submit' name='dzest' value='{$row['atsauksmes_id']}'>
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