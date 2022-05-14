<?php  /* registrer-klassekode */
/*
/*  Programmet lager et html-skjema for å registrere et klassekode
/*  Programmet registrerer data (klassekode, klassenavn og studiumkode) i databasen
*/
include ("start.php");
?> 

<h3>Registrer bilde </h3>

  <form method="post" action="" id="bilde" name="bilde" enctype="multipart/form-data">

      Velg bilde: <input type="file" id="fil" name="fil" size="60" required><br>
      Bildenr:<input type="number" id="bildenr" name="bildenr" required><br>
      Beskrivelse: <input type="text" id="beskrivelse" name="beskrivelse" required> <br>
      <input type="submit" value="Fortsett" id="fortsett" name="fortsett" alt="fortsett">
      <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill">
        
    </form>

<div id="melding"></div>

    <script src="klasse_validering.js"></script>



<?php

if (isset($_POST["fortsett"])){
    
$bildenr=$_POST["bildenr"];
$beskriv=$_POST["beskrivelse"];
$filnavn=$_FILES["fil"]["name"];
$filtype=$_FILES["fil"]["type"];
$filsize=$_FILES["fil"]["size"];
$filtmp=$_FILES["fil"]["tmp_name"];
$nyttnavn="bilder/".$filnavn; 

if (!$bildenr or !$beskriv or !$filnavn){
    print ("Alle feltene må fylles ut!");}
    
else {
    
    if ($filtype!="image/gif" && $filtype!="image/jpeg" && $filtype!="image/jpg" && $filtype!="image/png"){
        die("Det er bare mulig å laste opp bilde filer"); 
    }
    
    if ($filsize > 5000000){
        die("<br>Bilde overstiger 50MB");
    }
        include("db-tilkobling.php");
        $sqlSetning = "SELECT * FROM bilde WHERE filnavn='$filnavn';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("<b>Error:</b> Ikke mulig å koble til database");
        $antallRader = mysqli_num_rows($sqlResultat);
    
       if($antallRader!=0){ //sjekker om den finnes fra før
            die("Filnavn er allerede registrert!");}
    
    else {
        
        $sqlSetning = "SELECT * FROM bilde WHERE bildeNr='$bildenr';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("<b>Error:</b> Ikke mulig å koble til database");
        $antallRader = mysqli_num_rows($sqlResultat);
        
        if($antallRader!=0){ //sjekker om den finnes fra før
            print ("Bilde er allerede registrert!");
        }
        else {
            if (move_uploaded_file($filtmp,$nyttnavn)){
            
            $sqlSetning = "INSERT INTO bilde (bildeNr, filnavn, beskrivelse) VALUES ('$bildenr','$filnavn','$beskriv');";
            $sqlResultat = mysqli_query($db, $sqlSetning) or die ("<b>Error:</b> Ikke mulig å koble til database");
            
            print ("Bilde er lastet opp");
            }
            else {
                print ("Bilde ble ikke lastet opp");
            }
            
        }
    }
}
    
}

?> 