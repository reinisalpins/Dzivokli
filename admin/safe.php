<?php
 require("../connect_db.php");
 $adminId = $_SESSION["users"];
 $adminaVaicajums = "SELECT * FROM admin where admin_id = '$adminId'";
 $atlasaAdminu = mysqli_query($savienojums, $adminaVaicajums) or die("Nekorekts Vaicajums!");
 

 while($row = mysqli_fetch_assoc($atlasaAdminu)){
  if($row['role'] !== 'galvenais'){
    header("Location: sakums.php");
  }
 }
?>