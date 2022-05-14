<?php  
session_start();
@$innloggetBruker=$_SESSION["brukernavn"]; 
  
if (!$innloggetBruker)  /* bruker er ikke innlogget */
 {
  print("<meta http-equiv='refresh' content='0;url=innlogging.php'>");
 }
?> 

<!DOCTYPE html>
<head>
  <title>Innlogging</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" title="Stilark" /> 
</head>

<div class="header">
  <h2>Obligatorisk oppgave 2 - Zaid Ib.</h2>
</div>
    <div class="meny">
      <h3>Meny</h3>
      <p><a href="hoved.php">Hjem </a></p>   
      <p><a href="utlogging.php">Logg ut</a></p>        
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
      <a href="sok-alle.php">Søk i databasen</a><br/>           
    </div>
    <div class="main">