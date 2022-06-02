<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Admin panelis</title>
</head>
<body>

<?php
            session_start();

            if(isset($_SESSION['users'])){
               
            }else{header("Location: index.php");
            }
            ?>

    
    <nav class="sidebar">
      <div class="sidebar-header">
        <h3> <i class="fas fa-home"></i></h3>
        <?php
         require("../connect_db.php");
         $adminId = $_SESSION["users"];
         $adminaVaicajums = "SELECT * FROM admin where admin_id = '$adminId'";
         $atlasaAdminu = mysqli_query($savienojums, $adminaVaicajums) or die("Nekorekts Vaicajums!");
         

         while($row = mysqli_fetch_assoc($atlasaAdminu)){
            echo "
           <h3>Sveicināti: {$row['lietotajvards']}</h3> 
            ";
         }
        
        ?>
        
      </div>
      <hr>
      <ul>
        <li>
          <a href="sakums.php" class=" <?php echo($page == "sakums" ? "active" : ""); ?>"> Sākums </a>
        </li>
        <li>
          <a href="lietotaji.php" class=" <?php echo($page == "lietotaji" ? "active" : ""); ?>"> Lietotāji </a>
        </li>
        <li>
          <a href="sludinajumi.php" class=" <?php echo($page == "sludinajumi" ? "active" : ""); ?>"> Sludinājumi </a>
        </li>
        <li>
          <a href="atsauksmes.php" class=" <?php echo($page == "atsauksmes" ? "active" : ""); ?>"> Atsauksmes </a>
        </li>

        <?php
         require("../connect_db.php");
         $adminId = $_SESSION["users"];
         $adminVaicajums = "SELECT role FROM admin WHERE admin_id = '$adminId'";
         $atlasaAdmin = mysqli_query($savienojums, $adminVaicajums) or die("Nekorekts Vaicajums!");

         while($row = mysqli_fetch_assoc($atlasaAdmin)){
          $var1;
          $var2;
          
           if($page == 'admin'){
              $var2 = 'active';
            }else{
              $var2 = '';
            }

          if ($row['role'] == 'galvenais'){
            $var1 = '';
          }else if($row['role'] == 'parastais'){
            $var1 = 'var1';
           
          }
          echo"
          <li class='$var2' id='$var1'>
            <a href='admin.php' class=''> Administratori </a>
          </li>
         ";

         }
       
        ?>
        
        
        <li>
          <a href="../index.php">Galvenā lapa </a>
        </li>
      </ul>

      <div class="logout"><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></div>
    </nav>
    <div class="content">
      <div class="container">