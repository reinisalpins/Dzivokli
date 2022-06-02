<?php
$page = "sakums";
require "header.php";
?>


<?php
require("../connect_db.php");
$lietotajuSkaits = "SELECT COUNT(lietotajs_id) FROM lietotajs";
$altasaLietotajuSkaitu = mysqli_query($savienojums, $lietotajuSkaits) or die("Nekorekts vaicajums!");
$sludinajumuSkaits = "SELECT COUNT(sludinajums_id) FROM sludinajums";
$atlasaSludinajumuSkaitu = mysqli_query($savienojums, $sludinajumuSkaits) or die("Nekorekts vaicajums!");
$atsauksmesSkaits = "SELECT COUNT(atsauksmes_id) FROM atsauksmes";
$atlasaAtsauksmesSkaitu = mysqli_query($savienojums, $atsauksmesSkaits) or die("Nekorekts vaicajums!");
$atlasaJaunakosSludinajumus = "SELECT * FROM sludinajumi ORDER BY sludinajums_id DESC LIMIT 3";
$jaunakieSludinajumi = mysqli_query($savienojums, $atlasaJaunakosSludinajumus) or die("Nekorekts vaicajums!");
?>

        <div class="box-container">
            <div class="box">
                <a href="lietotaji.php">
                    <i class="fas fa-user"></i>
                </a>
                <h1>
                    <?php
                        if(mysqli_num_rows($altasaLietotajuSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($altasaLietotajuSkaitu)){
                                echo"{$row['COUNT(lietotajs_id)']}";
                            }
                        }
                    ?>
                </h1>
                <h3>
                    Lietotāji
                </h3>
                <p>kopā</p>
            </div>

            <div class="box">
            <a href="sludinajumi.php">
                <i class="fas fa-scroll"></i>
                </a>
                <h1>
                <?php
                        if(mysqli_num_rows($atlasaSludinajumuSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaSludinajumuSkaitu)){
                                echo"{$row['COUNT(sludinajums_id)']}";
                            }
                        }
                    ?>
                </h1>
                <h3>
                    Sludinājumi
                </h3>
                <p>kopā</p>
            </div>
            <div class="box">
            <a href="rezervacijas.php">
                <i class="fas fa-handshake"></i>
                </a>
                <h1>
                <?php
                        if(mysqli_num_rows($atlasaAtsauksmesSkaitu) > 0){
                            while($row = mysqli_fetch_assoc($atlasaAtsauksmesSkaitu)){
                                echo"{$row['COUNT(atsauksmes_id)']}";
                            }
                        }
                    ?>
                </h1>
    
                <h3>
                    Atsauksmes
                </h3>
                <p>kopā</p>
            </div>
            
        </div>
        
        <div class="box1">
            <div class="head-info">
                Jaunākie sludinājumi
            </div>
            <table>
                <tr>
                    <th>
                        Īpašnieks
                    </th>
                    <th>
                        Adrese
                    </th>
                    <th>
                        Cena
                    </th>
                    <th>
                        Mājdzīvnieki
                    </th>
                    <th>
                        Tālrunis
                    </th>
                    <th>
                        Attēli
                    </th>
                </tr>

                <?php
                if(mysqli_num_rows($jaunakieSludinajumi) > 0){
                    while($row = mysqli_fetch_assoc($jaunakieSludinajumi)){
                        echo"<tr>
                        <td>{$row['vards']} {$row['uzvards']}</td>
                        <td>{$row['pilseta']}, {$row['iela']} iela, {$row['ielas_nr']}, {$row['dzivokla_nr']}</td>
                        <td>{$row['cena']}</td>
                        <td>{$row['majdzivnieki']}</td>
                        <td>{$row['talrunis']}</td>
                        <td><div class='bildes'><img src='../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['prieksskatijuma_attels']}' class='myImg' id='myImg'>
                            <img src='../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['attels_2']}' class='myImg' id='myImg'>
                            <img src='../lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['attels_3']}' class='myImg' id='myImg'>
                            <div id='myModal' class='modal'>
                          <span class='close'>&times;</span>
                          <img class='modal-content' id='img01'>
                        </div>
                            </div></td>
                        </tr>";
                    }
                }
                
                ?>

               
            </table> 
            <div class="apskatit">
                <a href="sludinajumi.php">Apskatīt visus</a>
            </div>
            
        </div>
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

</body>
</html>