<?php
$page = "sludinajumi";
    require "header.php"; 
?>

<section class="sludinajumi">
    <div class="box-container">

    <?php
                require("connect_db.php");

                $results_per_page = 8;
                $sludinajumuVaicajums = "SELECT * FROM sludinajumi";
                $atlasaSludinajumus = mysqli_query($savienojums, $sludinajumuVaicajums) or die("Nekorekts vaicajums");

                $number_of_results = mysqli_num_rows($atlasaSludinajumus); 
                
                
                $number_of_pages = ceil($number_of_results/$results_per_page);

                if (!isset($_GET['page'])) {
                    $page = 1;
                  } else {
                    $page = $_GET['page'];
                  }

                $this_page_first_result = ($page-1)*$results_per_page;

                $sludinajumuVaicajums = "SELECT * FROM sludinajumi ORDER BY sludinajums_id DESC LIMIT ". $this_page_first_result . ',' .  $results_per_page;
                $atlasaSludinajumus = mysqli_query($savienojums, $sludinajumuVaicajums) or die("Nekorekts vaicajums");

                

                    while($row = mysqli_fetch_assoc($atlasaSludinajumus)){
                        echo "
                        <div class='sludinajums'>

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

                
            ?>

        </div>
    </div>
</section>


<div class="containeris">
    <div class="pagination">
<?php

$c="active"; 
for($i=1;$i<=$number_of_pages;$i++){
    if($page==$i)
    {
        $c="active";
    }
    else
    {
        $c="";
    }
                    echo '
                            <a href="sludinajumi.php?page=' . $i . '" class='. $c .'>' . $i . '</a>
                     ';
                }
?>
    </div>
</div>
