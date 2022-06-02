<?php
$page = "admin";
require "header.php";
require "safe.php";
?>

<div class="main-info">
    <div class="box-container">
    <?php
                
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    require("../connect_db.php");
                    
                    if(isset($_POST['dzestAdmin'])){
                        $ID = $_POST['dzestAdmin'];
                        $adminId = $_SESSION["users"];

                        if($ID == $adminId){
                            echo "<div class='alert sarkans'>Galvenais admins nevar sevi izdest</div>";
                            header("Refresh:1; url=admin.php");
                        }else if($ID !== $adminId){


                        $deleteAdminVaicajums = "DELETE FROM admin WHERE admin_id = '$ID'";

                        if(mysqli_query($savienojums, $deleteAdminVaicajums)){
                            if(mysqli_query($savienojums, $deleteAdminVaicajums)){
                                echo "<div class='alert zals'>Administrators dzēsts</div>";
                                header("Refresh:1; url=admin.php");
                            }else{
                                echo "<div class='alert sarkans'>Kluda</div>";
                                header("Refresh:1; url=admin.php");
                            }
                        }else{
                            echo "<div class='alert sarkans'>Kluda</div>";
                            header("Refresh:1; url=admin.php");
                        }
                        }

                        
                    }}else{
                            echo "<div class='alert sarkans'>Kaut kas nogaja greizi! Atgriezties <a href='admin.php'>iepriekseja lapā</a></div>";
                    }
            ?>
    </div>
</div>