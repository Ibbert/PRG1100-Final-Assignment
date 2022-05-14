<?php  /* innlogging  */

?>

<!DOCTYPE html>
<head>
  <title>Innlogging</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" title="Stilark" /> 
</head>

<div class="header">
  <h2>Obligatorisk oppgave 2</h2>
</div>
    <div class="meny">
      <h3>Meny</h3>
      <p><a href="hoved.php">Hjem </a></p>   
     <!-- <p><a href="utlogging.php">Logg ut</a></p>        
      <p>KLASSE</p>
      <a href="registrer-klasse.php">Registrer klasse</a> 
      <a href="vis-klasse.php">Vis alle klasser</a>
      <a href="endre-klasse.php">Endre klasse</a>
      <a href="slett-klasse.php">Slett klasse</a>
      <a href="sok-klasse.php">Søk etter klasse</a>
      <p>STUDENT</p>
      <a href="registrer-student.php">Registrer student</a> 
      <a href="vis-studenter.php">Vis alle studenter</a> 
      <a href="endre-student.php">Endre student</a>
      <a href="slett-student.php">Slett student</a> 
      <a href="sok-student.php">Søk etter student</a>
      <p>BILDE</p>
      <a href="registrer-bilde.php">Registrer bilde</a> 
      <a href="vis-alle-bilder.php">Vis alle bilder</a> 
      <a href="endre-bilde.php">Endre bilde</a>
      <a href="slett-bilde.php">Slett bilde</a>
      <a href="sok-bilde.php">Søk etter bilde</a>
      <p>SØK</p>
      <a href="sok-alle.php">Søk i databasen</a><br/> -->          
    </div>
    <div class="main">

<h3>Innlogging </h3>

<form action="" id="innloggingSkjema" name="innloggingSkjema" method="post">
  Brukernavn: <input name="brukernavn" type="text" id="brukernavn"> <br />
  Passord: <input name="passord" type="password" id="passord"  >  <br />
  <input type="submit" name="logginnKnapp" value="Logg inn">
  <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>

Ny bruker ? <br />
<a href="registrer-bruker.php">Registrer deg her</a> <br /> <br />

<?php
  if (isset($_POST ["logginnKnapp"]))
    {
      include("sjekk.php");

      $brukernavn=$_POST ["brukernavn"];
      $passord=$_POST["passord"]; 

      if (!sjekkBrukernavnPassord($brukernavn,$passord))  /* brukernavn og passord er ikke korrekt */
        {
          print("Feil brukernavn/passord <br />");
        }
      else  /* brukernavn og passord er korrekt */		
        {
          session_start();
          $_SESSION["brukernavn"]=$brukernavn;  /* brukernavn lagt inn i session-variabelen */
          print("<meta http-equiv='refresh' content='0;url=hoved.php'>");
            /* redirigering til hoved-siden (hoved.php) */
        }
    }
?>