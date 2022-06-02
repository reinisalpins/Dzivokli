<?php
$page = "profils";
require "header.php";
$page2 = "sludinajumi";
require "profilaNavbar.php";
?>


<div class="main-info">
    <div class="box-container">
    <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require("connect_db.php");
                    if(isset($_POST['delete'])){
                        $ID = $_POST['delete'];

                            $deleteVaicajums = "DELETE FROM atsauksmes WHERE atsauksmes_id = '$ID'";

                            if(mysqli_query($savienojums, $deleteVaicajums)){
                                echo "<div class='alert zals'>Atsauksme dzēsta</div>";
                                header("Refresh:1; url=manasAtsauksmes.php");
                            }else{
                                echo "<div class='alert sarkans'>Neizdevās dzēst atsauksmi</div>";
                            header("Refresh:1; url=manasAtsauksmes.php");
                            }

                        }
                    }
            ?>
    </div>
</div>