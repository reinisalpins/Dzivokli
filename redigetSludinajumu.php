<?php
$page = "profils";
require "header.php";
$page2 = "sludinajumi";
require "profilaNavbar.php";
?>



<div class='main-info'>
        <div class='box-container'>

        <?php
        require("connect_db.php");
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $lietotajs = $_SESSION['user'];
                    if(isset($_POST['edit'])){
                        $ID = $_POST['edit'];
                        $apraksts = $_POST['apraksts'];
                        $cena = $_POST['cena'];
                        $majdzivnieki = $_POST['majdzivnieki'];


                        $lietotajsVaicajums = "SELECT * FROM sludinajumi where sludinajums_id = '$ID'";
                        $query = $savienojums->query($lietotajsVaicajums);
                        $row = $query->fetch_assoc();

                        $valsts= $row['valsts'];
                        $pilseta= $row['pilseta'];
                        $iela= $row['iela'];
                        $ielas_nr= $row['ielas_nr'];
                        $dzivokla_nr= $row['dzivokla_nr'];
                        
                        


    
                        $redigetSludinajumuVaicajums = "UPDATE sludinajums SET apraksts = '$apraksts', cena = '$cena', majdzivnieki = '$majdzivnieki',
                        valsts = '$valsts', pilseta = '$pilseta', iela = '$iela', ielas_nr = '$ielas_nr', dzivokla_nr = '$dzivokla_nr' WHERE sludinajums_id = '$ID'";

                        if(mysqli_query($savienojums, $redigetSludinajumuVaicajums)){
                                echo "<div class='alert zals'>Sludinajums veiksmigi rediģēts! </div>";
                               header("Refresh:1; url=maniSludinajumi.php");
                        }else{
                            echo "<div class='alert sarkans'> Kluda!</div>";
                        }
                    }else{

                        $sludinajumaID=$_POST['apskatit'];


                        $sludinajumsVaicajums = "SELECT * FROM sludinajums WHERE sludinajums_id = '$sludinajumaID'";

                        $atlasaSludinajumu = mysqli_query($savienojums, $sludinajumsVaicajums) or die("Nekorekts vaicajums!");

                        while($row= mysqli_fetch_assoc($atlasaSludinajumu)){
                                $checked = '';
                                $checked2 = '';

                            if($row['majdzivnieki'] == 'Atļauti'){
                                $checked = 'checked';
                            }else if($row['majdzivnieki'] == 'Aizliegti'){
                                $checked2 ='checked';
                            }
                            echo"
                            <div class='redigetProfilu'>
                            <form action='' method='POST'>
                            <h2>Apraksts</h2>
                            <textarea name='apraksts' '>{$row['apraksts']}</textarea>
                            <h2>Cena dienā</h2>
                            <input type='text' name='cena' value='{$row['cena']}'>
                            <h2>Valsts</h2>
                            <h2 class='krasa'>{$row['valsts']}</h2>
                            <h2>Pilsēta</h2>
                            <h2 class='krasa'>{$row['pilseta']}</h2>
                            <br>
                            <h2><span style ='color: #E6203B'>* </span>Rediģēt var tikai Aprakstu, Cenu un vai mājoklī atļauti mājdzīvnieki</h2>
                            
                            
                            
                        </div>
                            <div class='redigetProfilu'>
                            <h2>Iela</h2>
                            <h2 class='krasa'>{$row['iela']}</h2>
                            <h2>Ielas nr.</h2>
                            <h2 class='krasa'>{$row['ielas_nr']}</h2>
                            <h2>Dzīvokļa nr.</h2>
                            <h2 class='krasa'>{$row['dzivokla_nr']}</h2>
                            <h2>Vai mājoklī atļauti mājdzīvnieki?</h2>
                            <label class='container'>Jā
                                <input type='radio' $checked name='majdzivnieki' value='Atļauti'>
                                <span class='checkmark'></span>
                                 </label>
                                 <label class='container'>Nē
                                <input type='radio' $checked2 name='majdzivnieki' value='Aizliegti'>
                                <span class='checkmark'></span>
                                </label>
                                
                                <button type='submit' name='edit' value='{$row['sludinajums_id']}' class='poga'>Saglabāt</button>
                            </div>


                            
                            </form>
                            </div>
                            
                            ";
                        }
                    }
                
                
                }


                        ?>