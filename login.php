<?php
$page = "profils";
require "header.php";
?>
<body>
<div class="formContainer">
            <h1 class="title">Ielogoties savā profilā lai veiktu darbības</h1>

            <?php
            if(isset($_POST["submit"])){
                require("connect_db.php");
                session_start();

                $EPasts=mysqli_real_escape_string($savienojums, $_POST["epasts"]);
                $Parole=mysqli_real_escape_string($savienojums, $_POST["parole"]);
                $sql="SELECT * FROM lietotajs WHERE epasts = '$EPasts' ";
                $rezultats = mysqli_query($savienojums, $sql);

                if(mysqli_num_rows($rezultats) == 1){
                    while($row = mysqli_fetch_array($rezultats)){
                        if(password_verify($Parole, $row["parole"])){
                            $_SESSION["user"] = $row['lietotajs_id'];
                            header("location:profils.php");
                        
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
                <label class=input-label >E-pasts:</label>
                <input type="email" name="epasts" class="input" required />
                <label class="input-label" >Parole:</label>
                <input type="password" name="parole" class="input" required />
                <input type="submit" name="submit" class="sign-in-button" value="Ielogoties"/>
            </form>
            <div class="login-links-container">
                <a href="register.php" class="login-link">Reģistrēties</a>
            </div>
</div>  
</body>
</html>
