
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
            <div class="jaunakais">
                <img src="images/dzivoklis.jpg" alt="">
                <p class="lielaks"><i class="fas fa-map-marker-alt"></i>Liepāja</p>
                <p>50$ par nakti</p>

                <div class="poga">
                    <button>Vairāk</button>
                </div>

            </div>
            <div class="jaunakais">
            <img src="images/dzivoklis2.jpg" alt="">
                <p class="lielaks"><i class="fas fa-map-marker-alt"></i>Saldus</p>
                <p>50$ par nakti</p>

                <div class="poga">
                    <button>Vairāk</button>
                </div>
            </div>
            <div class="jaunakais">
            <img src="images/dzivoklis3.jpg" alt="">
                <p class="lielaks"><i class="fas fa-map-marker-alt"></i>Grobiņa</p>
                <p>50$ par nakti</p>

                <div class="poga">
                    <button>Vairāk</button>
                </div>
            </div>
            <div class="jaunakais">
            <img src="images/dzivoklis.jpg" alt="">
                <p class="lielaks"><i class="fas fa-map-marker-alt"></i>Rīga</p>
                <p>50$ par nakti</p>

                <div class="poga">
                    <button>Vairāk</button>
                </div>
            </div>
        </div>
    </section>

    

    <?php
 require "footer.php"; 
 ?> 
