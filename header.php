<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Izīrē mājvietu</title>
</head>
<body>
<header>
    <a href="index.php" class="logo"> Dzīvokļu īre</a>

    <ul class="navbar">
    <a href="index.php" class="<?php echo($page == "sakums" ? "active" : ""); ?>">Sākumlapa</a>
    <a href="sludinajumi.php" class="<?php echo($page == "sludinajumi" ? "active" : ""); ?>">Sludinājumi</a>
    <a href="pievienot.php" class="<?php echo($page == "pievienot" ? "active" : ""); ?>" >Pievienot sludinājumu</a>
    <a href="login.php" class="<?php echo($page == "profils" ? "active" : ""); ?>">Profils</a>
    </ul>
    </header>
</body>
</html>