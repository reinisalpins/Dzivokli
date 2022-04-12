
<?php
$page = "sakums";
    require "header.php"; 
?>

    <section class="sakums">
        <div class="box-container">
            <div class="informacija">
                <div class="dalas">
                     <div class="box1">
                <h1>Apskatīt pieejamās mājvietas</h1>
                <p>Apskati visas 123 īslaicīgās apmešanās mājvietas, informāciju par īres iespējām, to pieejamību un rezervē kādu no tām! </p>
                </div>
                
                <div class="box2">
                    <img src="images/maja.png" alt="">
                </div>
                </div>

                <div class="poga">
                   <a href="sludinajumi.php"><button>Apskatīt</button></a> 
                </div>
               
            </div>
            <div class="informacija">
                <div class="dalas">
                    <div class="box1">
                        <h1>Ievietot savu sludinājumu</h1>
                        <p>Jūs sarūpēsiet ērtu gultu un pamataprīkojumu un piedāvāsiet uzturēšanos mājoklī uz laiku no dienas līdz dažām nedēļām.</p>
                </div>
                <div class="box2">
                    <img src="images/handshake.png" class="handshake" alt="">
                </div>
                </div>
                <div class="poga">
                    <a href="pievienot.php"><button>Izmēģināt</button></a>
                </div>
           
            </div>
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
