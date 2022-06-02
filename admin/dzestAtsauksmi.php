<?php
$page = "atsauksmes";
require "header.php";
?>

<?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require("../connect_db.php");
                    if(isset($_POST['dzest'])){
                        $ID = $_POST['dzest'];

                            $deleteVaicajums = "DELETE FROM atsauksmes WHERE atsauksmes_id = '$ID'";

                            if(mysqli_query($savienojums, $deleteVaicajums)){
                                echo "<div class='alert zals'>Atsauksme dzēsta</div>";
                                header("Refresh:1; url=atsauksmes.php");
                            }else{
                                echo "<div class='alert sarkans'>Neizdevās dzēst atsauksmi</div>";
                            header("Refresh:1; url=atsauksmes.php");
                            }

                        }
                    }
            ?>