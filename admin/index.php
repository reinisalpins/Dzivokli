<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Admin panelis</title>
</head>
<body>
<div class="container" id="container">

	<div class="forma ielogoties">
        <?php
            if(isset($_POST["submit"])){
                require("../connect_db.php");
                session_start();

                $Lietotajvards=mysqli_real_escape_string($savienojums, $_POST["lietotajvards"]);
                $Parole=mysqli_real_escape_string($savienojums, $_POST["parole"]);
                $sql="SELECT * FROM admin WHERE lietotajvards = '$Lietotajvards' ";
                $rezultats = mysqli_query($savienojums, $sql);

                if(mysqli_num_rows($rezultats) == 1){
                    while($row = mysqli_fetch_array($rezultats)){
                        if(password_verify($Parole, $row["parole"])){
                            $_SESSION["users"] = $row['admin_id'];
                            $_SESSION["roles"] = $row['role'];
                            header("location:sakums.php");
                        
                            }else{
                            echo "<div class='kluda'>Nepareiza parole un/vai e-pasts!</div>";
                        }
                    }
                }else{
                    echo "<div class='kluda'>Nepareiza parole un/vai e-pasts!</div>";
                }
            }
                        ?>
        

		<form action="" method="POST">
            <img src="images/house.png" alt="">
			<h1>Ielogoties sistēmā</h1>
			<input type="text" name="lietotajvards" placeholder="Lietotājvārds"  required/>
			<input type="password" name="parole" placeholder="Parole" required/>
			<input type="submit" name="submit" class="poga" value="Ielogoties"/>
            
		</form>
	</div>        
</div>
	
</body>
</html>