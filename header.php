<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Izīrē mājvietu</title>
</head>
<body>

    <nav>
      <div class="logo">
        <img src="images/logo.png" alt="logo"> 
      </div>
      <ul>
        <li><a href="index.php" class=" <?php echo($page == "sakums" ? "active" : ""); ?>">Sākumlapa</a></li>
        <li><a href="sludinajumi.php" class=" <?php echo($page == "sludinajumi" ? "active" : ""); ?>">Sludinājumi</a></li>    
        <li><a href="pievienot.php" class=" <?php echo($page == "pievienot" ? "active" : ""); ?>">Pievienot Sludinājumu</a></li> 
        <li><a href="login.php" class=" <?php echo($page == "profils" ? "active" : ""); ?>">Profils</a></li>
      </ul>
    </nav>


<script src="script.js"></script>
</body>
</html>