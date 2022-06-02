
<?php
$page = "sakums";
    require "header.php"; 
?>


<div class="sakumaBilde">
      <div class="heading">Izīrē mājvietu</div>
      <div class="heading2">Platforma dzīvokļu un māju īrei</div>
    </div>



<section class="info">
    <div class="box-container">
         <div class="infoIziret">
             <div class="box">
                <p class="pirmais">Jums ir māja vai dzīvoklis kurš netiek izmantots?</p>
                <p class="otrais">Pelniet ar to!</p>
                <p class="tresais">Izmantojiet mūsu pakalpojumu lai izīrētu savu nekustamo īpašumu uz laika periodu no dienas līdz pat vairākām nedēļām!</p>

                <a href="pievienot.php" class="poga">Izmēģināt</a>
             </div>
            
        </div>
        <div class="infoIziret">
            <div class="box2">
                <p class="pirmais">Jūs ceļojat pa Latviju ar mājdzīvnieku?</p>
                <p class="otrais">Bet viesnīcās mājdzīvnieki ir aizliegti? </p>
                <p class="tresais">Mums priekš Jums ir risinājums! Apskatiet mūsu sludinājumus un esam pārliecināti, ka atradīsiet kādu mājvietu kurā drīkst palikt ar mājdzīvniekiem.</p>

                <a href="sludinajumi.php" class="poga">Apskatīt sludinājumus</a>
            </div>
            
        </div>
    </div>

    <!-- <hr> -->
   

    <div class="infoIevietot">

    </div>
</section>
    <section class="jaunakie">
        <h1>Jaunākie portāla sludinājumi</h1>
        <div class="box-container">


        <?php
                require("connect_db.php");
                $sludVaic = "SELECT * FROM sludinajumi ORDER BY sludinajums_id DESC LIMIT 4";
                $atlasaSlud = mysqli_query($savienojums, $sludVaic) or die("Nekorekts vaicajums");

                if(mysqli_num_rows($atlasaSlud) > 0){
                    while($row = mysqli_fetch_assoc($atlasaSlud)){
                        echo "
                        <div class='jaunakais'>

                        <img src='lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['prieksskatijuma_attels']}'>
                <p><b>Pilsēta:</b> {$row['pilseta']}</p>
                <p><b>Iela:</b> {$row['iela']}</p>
                <p><b>Cena:</b> {$row['cena']}$/Dienā</p>
                <form action ='sludinajums.php' method='post'>
                <div class='poga'>
                    <button type='submit' class='poga' name='apskatit' value='{$row['sludinajums_id']}'>Apskatīt</button>
                </div>
                       
                </form>
            </div>
                        ";
                    }
                }
            ?>
        </div> 
    </section>

    

    <?php
 require "footer.php"; 
 ?> 
