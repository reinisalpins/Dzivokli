<?php
$page = "admin";
require "header.php";
require "safe.php";
?>


<div class="box-container">
    <div class="boxInfo">
    <?php
     if($_SERVER['REQUEST_METHOD'] =='POST'){
        require("../connect_db.php");
        if(isset($_POST['rediget'])){
            $lietotajvards = $_POST['lietotajvards'];
            $parole = $_POST['parole'];
            $role = $_POST['role'];
            $paroleHash = password_hash($parole, PASSWORD_DEFAULT);


            $adminaID = $_POST['rediget'];

            $sql = "SELECT * FROM admin WHERE admin_id = '$adminaID'";
            $query = $savienojums->query($sql);
            $row = $query->fetch_assoc();


            $sql2 = "SELECT * FROM admin WHERE lietotajvards ='$lietotajvards'";
            $query2 = $savienojums->query($sql2);
            $row2 = $query2->fetch_assoc();



            if($row['lietotajvards'] == $lietotajvards){
                 $redigetAdminVaicajums = "UPDATE admin SET lietotajvards = '$lietotajvards', parole = '$paroleHash', role = '$role' where admin_id=" .$_POST['rediget'];

            if(mysqli_query($savienojums, $redigetAdminVaicajums)){
                echo "<div class='alert zals'>Administrators veiksmigi rediģēts </div>";
                header("Refresh:1; url=admin.php");
            }else{
                echo "<div class='alert sarkans'> Kluda!</div>";
            }
            }else if($row2 > 1){
                echo "<div class='alert sarkans'> Šāds lietotājvārds jau pastāv, izvēlieties citu!</div>";
                header("Refresh:2; url=admin.php");
            }
            else{
                $redigetAdminVaicajums = "UPDATE admin SET lietotajvards = '$lietotajvards', parole = '$paroleHash', role = '$role' where admin_id=" .$_POST['rediget'];
                if(mysqli_query($savienojums, $redigetAdminVaicajums)){
                    echo "<div class='alert zals'>Administrators veiksmigi rediģēts </div>";
                    header("Refresh:1; url=admin.php");
                }else{
                    echo "<div class='alert sarkans'> Kluda!</div>";
                }
            }




           
            

        }else{
            $adminaID = $_POST['redigetAdmin'];
            $adminsVaicajums = "SELECT * FROM admin WHERE admin_id = '$adminaID'";

            $atlasaAdmins = mysqli_query($savienojums, $adminsVaicajums) or die("Nekorekts vaicajums!");

            $checkedd = '';
            $checkedd2 = '';

       

            while($row = mysqli_fetch_assoc($atlasaAdmins)){ 
                
                if($row['role'] == 'galvenais'){
            $checkedd = 'checked';
        }else{
            $checkedd2 ='checked';
        }
                echo "
                <form action='' method='POST'>
                <div class='head-info'>Rediģēt admin</div>
                <table class='redigetTabula'>
                <tr>
                <th>Lietotājvārds:</th>
                <td><input type='text' name='lietotajvards' value='{$row['lietotajvards']}' class='inputs' required></td>
                </tr>
                <tr>
                <th>Parole:</th>
                <td><input type='password' name='parole' value='' class='inputs' required></td>
                </tr>
                <tr>
                <th>Amats:</th>
                <td> 
                <label>Galvenais admins</label>
                    <input class='role' type='radio' $checkedd name='role' value='galvenais'>
                    <br>
                <label >Parastais admins</label>
                    <input class='role' type='radio' $checkedd2 name='role' value='parastais'>
                   
                </td>
                </tr>
                
                </table>
                <button type='submit' name='rediget' value='{$row['admin_id']}' class='btn1'>Saglabāt</button>
                </form>
                ";
            }
        }
    }

    ?>


    </div>
</div>