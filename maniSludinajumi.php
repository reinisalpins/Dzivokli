<?php
$page = "profils";
require "header.php";
?>

<section class="profils">
   <div class="side-info">
        <ul>
            <li>
                <a href="profils.php">Mans profils</a>
            </li>
            <li>
                <a class="active" href="">Mani sludinājumi</a>
            </li>
            <li>
                <a href="manasRezervacijas.php">Manas rezervācijas</a>
            </li>
            <li>
                <a href="redigetProfilu.php">Rediģēt profilu</a>
            </li>
            <li>
                <a href="">Dzēst profilu</a>
            </li>
        </ul>
    </div> 
    <div class="main-info">
        <div class="box-container">
            <div class="informacija">
                    <table>
                        <tr>
                            <th>
                                Apraksts
                            </th>
                            <th>
                                Atrašanās vieta
                            </th>
                            <th>
                                Mājdzīvnieki
                            </th>
                            <th>
                                Cena
                            </th>
                            <th>
                                Rediģēt
                            </th>
                            <th>
                                Dzēst
                            </th>
                        </tr>
                        <tr>
                            <td>
                                Lorem ipsum dolor sit amet consectetur............
                            </td>
                            <td>
                                Liepāja, Lielā iela 15A
                            </td>
                            <td>
                                Atļauti
                            </td>
                            <td>
                                30$ dienā
                            </td>
                            <td>
                                <form action="redigetSludinajumu.php" method="POST">
                                <button type="submit" name="edit">
                                    <i class="fas fa-edit"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                            <form action="dzestSludinajumu.php" method="POST">
                                    <button type="submit" name="delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    
    </div>