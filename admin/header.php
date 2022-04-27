<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Admin panelis</title>
</head>
<body>

    
    <nav class="sidebar">
      <div class="sidebar-header">
        <h3> <i class="fas fa-home"></i></h3>
        <h3>Sveicināti: Reinis</h3>
        
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
          <a href="rezervacijas.php" class=" <?php echo($page == "rezervacijas" ? "active" : ""); ?>"> Rezervācijas </a>
        </li>
      </ul>

      <div class="logout"><a href="index.php"><i class="fas fa-sign-out-alt"></i></a></div>
    </nav>
    <div class="content">
      <div class="container">