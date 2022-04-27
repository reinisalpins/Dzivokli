<?php
$page = "profils";
require "header.php";
?>


<section class="profils">
   <div class="side-info">
        <ul>
            <li>
                <a  href="profils.php">Mans profils</a>
            </li>
            <li>
                <a href="maniSludinajumi.php">Mani sludinājumi</a>
            </li>
            <li>
                <a href="manasRezervacijas.php">Manas rezervācijas</a>
            </li>
            <li>
                <a class="active" href="">Rediģēt profilu</a>
            </li>
            <li>
                <a href="dzestProfilu.php">Dzēst profilu</a>
            </li>
        </ul>
    </div> 

    <div class="main-info">
        <div class="box-container">
        <div class="redigetProfilu">
    <form action="POST">
    <h2>Vārds</h2>
    <input type="text" value="Reinis">
    <h2>Uzvārds</h2>
    <input type="text" value="Alpiņš">
    <h2>E-Pasts</h2>
    <input type="email" value="reinisalpins@gmail.com">
    <h2>Parole</h2>
    <input type="password" value="Parole01">

    <h2>Tālrunis</h2>

    <input type="text" value="29412312">
</div>
    <div class="redigetProfilu">
    
    <h2>Pilsēta</h2>
    <input type="text" value="Liepāja">
    
    <h2>Iela</h2>
    <input type="text" value="Lielā iela">
    <h2>Ielas nr</h2>
    <input type="text" value="534B">
    <h2>Dzīvokļa nr. (ja tāds ir)</h2>
    <input type="text" value="15">

</form>

    <button class="poga">
        Saglabāt
    </button>
        </div>
    </div>
</div>
