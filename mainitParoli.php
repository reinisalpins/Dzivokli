<?php
$page = "profils";
require "header.php";
$page2 = "mainit";
require "profilaNavbar.php";
?>


<div class='main-info'>
        <div class='box-container'>
<div class="dzestProfilu">
    
    
<?php 
require("connect_db.php");
    $lietotajs = $_SESSION['user'];
    
    if(isset($_POST['update'])){
        $old = $_POST['old'];
        $new = $_POST['new'];
        $retype = $_POST['retype'];

        $sql = "SELECT * FROM lietotajs WHERE lietotajs_id = '$lietotajs'";


        $query = $savienojums->query($sql);
        $row = $query->fetch_assoc();
        if(password_verify($old, $row['parole'])){
            if($new == $retype){
                $password = password_hash($new, PASSWORD_DEFAULT);
 
                $sql = "UPDATE lietotajs SET parole = '$password' WHERE lietotajs_id = '$lietotajs'";
                if($savienojums->query($sql)){
                    echo "<div class='alert zals'>Parole veiksmīgi nomainīta</div>";
                }
                else{
                    echo "<div class='alert sarkans'>Nepareizs vaicājums</div>";
                }
            }
            else{
                echo "<div class='alert sarkans'>Paroles nesakrīt</div>";
            }
        }
        else{
            echo "<div class='alert sarkans'>Nepareiza vecā parole</div>";
        }
    }
     
?>
                <h1>Vai esat pārliecināts ka gribat mainīt savu paroli?</h1>
                <h2>Lai mainītu paroli no sākuma jāievada vecā parole</h2>
                <form action="" method="POST">
                    <input type="password" name="old" placeholder="Vecā parole" required>
                    <h2>Jaunā parole</h2>
                    <input type="password" name="new" placeholder="Jaunā parole" required>
                    <h2>Jaunā parole vēlreiz</h2>
                    <input type="password" name="retype" placeholder="Jaunā parole" required>
                    <button type="submit" class="poga" name="update">Mainit Paroli</button>
                </form>
</div>