<?php
$page = "pievienot";
require "header.php";
?>
<section class="pievienot">
    <h1>Pievieno savu sludinājumu</h1>
    <hr>
<form action="POST">
    <label for="">Apraksts</label>
    <textarea placeholder="Apraksts"></textarea>
    <hr>
    <label for="">Atrašanās vieta</label>
    <input type="text" placeholder="Pilsēta">
    <input type="text" placeholder="Iela">
    <input type="text" placeholder="Ielas numurs">
    <input type="number" placeholder="Dzīvokļa numurs">
    <hr>
    <label for="">Cena diennaktī</label>
    <input type="number" min="1" placeholder="Cena">
    <hr>
    <label for="">Papildus informācija</label>
    <h2>Vai mājoklī atļauti mājdzīvnieki?</h2>

    <label class="container">Jā
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
    </label>
    <label class="container">Nē
  <input type="radio" name="radio">
  <span class="checkmark"></span>
    </label>
    <hr>

    <label for="">Attēli</label>
    <h2>Priekšskatījuma attēls</h2>
    <input class="attels" type="file">
    <h2>2. Attēls</h2>
    <input class="attels" type="file">
    <h2>3. Attēls</h2>
    <input class="attels" type="file">
    <hr>
</form>

    <button class="poga">
        Pievienot sludinājumu
    </button>

        
   
</section>
       