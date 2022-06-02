<?php
$page = "sludinajumi";
require "header.php";
?>

<div class="box-container">
    <div class="boxInfo">
    <table>
                <tr>
                    <th>
                        Īpašnieks
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
                        Cena
                    </th>
                    <th>
                        Attēli
                    </th>
                    <th>
                        Dzēst
                    </th>
                </tr>
                <?php

                require("../connect_db.php");
                $sludinajumuVaicajums = "SELECT * FROM sludinajumi";
                $atlasaSludinajumus = mysqli_query($savienojums, $sludinajumuVaicajums) or die("Nekorekts Vaicajums!");

                    while($row = mysqli_fetch_assoc($atlasaSludinajumus)){

                        echo "

                            <tr>
                            <td>{$row['vards']} {$row['uzvards']}</td>
                            <td>{$row['valsts']}, {$row['pilseta']}, {$row['iela']} {$row['ielas_nr']}</td>
                            <td>{$row['epasts']}</td>
                            <td>{$row['talrunis']}</td>
                            <td>{$row['cena']}</td>
                            <td><div class='bildes'><img src='../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['prieksskatijuma_attels']}' class='myImg' id='myImg'>
                            <img src='../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['attels_2']}' class='myImg' id='myImg'>
                            <img src='../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['attels_3']}' class='myImg' id='myImg'>
                            <div id='myModal' class='modal'>
                          <span class='close'>&times;</span>
                          <img class='modal-content' id='img01'>
                        </div>
                            </div></td>
                            <td>
                            <form action='dzestSlud.php' method='POST'>
                            <button type='submit' name='dzest' value='{$row['sludinajums_id']}'>
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

<script>
var modal = document.getElementById('myModal');
var images = document.getElementsByClassName('myImg');
var modalImg = document.getElementById("img01");
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  img.onclick = function(evt) {
    console.log(evt);
    modal.style.display = "block";
    modalImg.src = this.src;
  }
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
</script>