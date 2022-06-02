<?php
$page = "sludinajumi";
    require "header.php"; 
?>

 <section class="sludinajums1">
    
<div class='bildes'>

    
      <?php
      require ("connect_db.php");

      $sludinajums = $_POST['apskatit'];

      $sludinajumsVaicajums = "SELECT * FROM sludinajumi WHERE sludinajums_id = ".$_POST['apskatit'];
      $atlasaSludinajumu = mysqli_query($savienojums, $sludinajumsVaicajums) or die("Nekorekts vaicajums");
      

      while($row= mysqli_fetch_assoc($atlasaSludinajumu)){
        echo "
        
    
    <img src='lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['prieksskatijuma_attels']}' class='myImg' id='myImg'>
    <img src='lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['attels_2']}' class='myImg' id='myImg'>
    <img src='lietotaji/{$row['vards']}{$row['uzvards']}/sludinajums{$row['iela']}{$row['ielas_nr']}{$row['dzivokla_nr']}/{$row['attels_3']}' class='myImg' id='myImg'>
    <div id='myModal' class='modal'>
  <span class='close'>&times;</span>
  <img class='modal-content' id='img01'>
</div>
    </div>
<div class='informacija'>
        <div class='box'>
         <h1>Apraksts</h1>
      <p>{$row['apraksts']}</p>
      <p>Mājdzīvnieki: {$row['majdzivnieki']}</p>
      <p>Atrašanās vieta: {$row['valsts']}, {$row['pilseta']}, {$row['iela']}, {$row['ielas_nr']}</p>
      <hr>
      <h1>Cena</h1>
      <p>{$row['cena']}$ dienā</p>
      <hr>
      <h1>Īpašnieks</h1>
      <p>Tālrunis: {$row['talrunis']}</p>
      <p>E-Pasts: {$row['epasts']}</p>
      <hr>
    </div> 
    
    <div class='box'>
      <div class='rezervet'>
     
      <h1>Pievienot Atsauksmi</h1>
        <form action='pievienotAtsauksmi.php' method='POST'>
          <h2>Pastāstiet par savu pieredzi apmetoties šajā mājvietā (<span>Pieejams tikai reģistrētiem lietotājiem</span>)</h2>
          <textarea name='atsauksme' placeholder='Rakstiet savu pieredzi saistībā ar šo mājokli šeit...' required></textarea>
          <h2>Vērtējums ballēs(1-sliktākais, 5-labākais)</h2>
          <select id='vertejums' name='vertejums'>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
        </select>
        <button type='submit' class='poga' value='{$row['sludinajums_id']}' name='submit'>Pievienot atsauksmi</button>
        </form> 
       </div>
      </div>
      </div>
        ";
      }


    
    ?>
  
      
    </div>
      </div> 

      <div class="atsauksmes">
        <h1>Jaunākās atsauksmes par šo mājvietu</h1>
        <?php
        $atsauksmesVaicajums = "SELECT * FROM atsauksmeJoin WHERE sludinajums_id = '$sludinajums' ORDER BY atsauksmes_id DESC LIMIT 3";
        $atlasaAtsauksmi = mysqli_query($savienojums, $atsauksmesVaicajums) or die("Nekorekts vaicajums");
        while($row= mysqli_fetch_assoc($atlasaAtsauksmi)){
          echo "<div class='atsauksmeBox'>
          <h2>Autors:</h2><p>{$row['vards']} {$row['uzvards']}</p>
          <h2>Atsauksmes:</h2><p>{$row['atsauksme']}</p>
          <h2>Vērtējums ballēs(1-sliktākais, 5-labākais):</h2><p>{$row['vertejums']}/5</p>
          <h2>Atsauksmes datums:</h2><p>{$row['datums']}</p>
          </div>";
        };
        ?>
      </div>
     
 </section> 
 <?php
 require "footer.php"; ?>
    
    


<script>
var modal = document.getElementById('myModal');
var images = document.getElementsByClassName('myImg');
var modalImg = document.getElementById("img01");
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  img.onclick = function(evt) {
    console.log(evt);
    modal.style.display = "block";
    modalImg.src = this.src;
  }
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
</script>