<?php
$page = "admin";
require "header.php";
require "safe.php";
?>

<form action='pievienotAdmin.php' method='POST'>
     <button type='submit' name='pievienot' class='pievienot'>Pievienot jaunu administratoru</button>
 </form>

<div class="box-container">
    
    <div class="boxInfo">
    <table>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Lietotājvārds
                    </th>
                    <th>
                        Amats
                    </th>
                    <th>
                        Rediģēt
                    </th>
                    <th>
                    Dzēst
                    </th>
                </tr>
                <?php

                require("../connect_db.php");
                $adminuVaicajums = "SELECT * FROM admin";
                $AtlasaAdminus = mysqli_query($savienojums, $adminuVaicajums) or die("Nekorekts Vaicajums!");

                while($row = mysqli_fetch_assoc($AtlasaAdminus)){

                    echo "

                    <tr>
                        <td>{$row['admin_id']}</td>
                        <td>{$row['lietotajvards']}</td>
                        <td>{$row['role']} administrators</td>
                        <td>
                            <form action='redigetAdmin.php' method='POST'>
                            <button type='submit' name='redigetAdmin' value='{$row['admin_id']}'>
                            <i class='fas fa-edit'></i>
                            </button>
                            </form>
                            </td>
                        <td>
                            <form action='dzestAdmin.php' method='POST'>
                            <button type='submit' name='dzestAdmin' value='{$row['admin_id']}'>
                            <i class='fas fa-trash'></i>
                            </button>
                            </form>
                            </td>
                    </tr>
                    ";
                }
    ?>    
            </table> 
</div>