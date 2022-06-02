<?php
$page = "admin";
require "header.php";
require "safe.php";
?>

<div class="box-container">
    <div class="boxInfo">
    <form action='' method='POST'>
                <div class='head-info'>Pievienot jaunu administratoru</div>
                <table class='redigetTabula'>
                <tr>
                <th>Lietotājvārds:</th>
                <td><input type='text' name='lietotajvards' placeholder="lietotājvārds" class='inputs' required></td>
                </tr>
                <tr>
                <th>Parole:</th>
                <td><input type='password' name='parole' placeholder="Parole" class='inputs' required></td>
                </tr>
                <tr>
                <th>Amats:</th>
                <td> 
                <label>Galvenais admins</label>
                    <input class='role' type='radio'  name='role' value='galvenais'required>
                    <br>
                <label >Parastais admins</label>
                    <input class='role' type='radio' name='role' value='parastais' required>
                   
                </td>
                </tr>
                
                </table>
                <button type='submit' name='saglabat' value='' class='btn1'>Saglabāt</button>
                </form>

                <?php

                    require("../connect_db.php");
                            if(isset($_POST['saglabat'])) {
                       $lietotajs = $_POST['lietotajvards'];
                       $parol = $_POST['parole'];
                       $role = $_POST['role'];
                        $parolHash =  password_hash($parol, PASSWORD_DEFAULT);


                        $sql = "SELECT * FROM admin WHERE lietotajvards = '$lietotajs'";
                        $res = mysqli_query($savienojums, $sql);

                        if(mysqli_num_rows($res) > 0){
                            echo "<div class='alert sarkans'>Lietotājs ar šādu lietotājvārdu jau pastāv, izmantojiet citu lietotajvardu</div>";
                        }else{
                            $pievienotAdmin = "INSERT INTO admin (admin_id, lietotajvards, parole, role)
                        VALUES (null, '$lietotajs', '$parolHash', '$role')";
        
                            if(mysqli_query($savienojums, $pievienotAdmin)){
                            header("Location: admin.php");
                                 }else{
                                    echo "<div class='alert'> Kluda, meginiet velreiz!</div>";
                        }
                    }
                    }
            ?>
    </div>
</div>