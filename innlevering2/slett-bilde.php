<?php  /* slett-bilde */

include ("start.php");

include ("dynamiske-funksjoner.php");

?> 

<script src="funksjon.js"> </script>

<h3>Slett bilde</h3>

<form method="post" action="" id="slettBildeSkjema" name="slettBildeSkjema" onSubmit="return bekreft()">
  Bilde:
  <select name="bildenrfilnavn" id="bildenrfilnavn">
    <?php listeboksBildenrFilnavn(); ?> 
  </select>  <br/>
  <input type="submit" value="Slett bilde" name="slettBildeKnapp" id="slettBildeKnapp" /> 
</form>

<?php
  if (isset($_POST ["slettBildeKnapp"]))
    {
      $bildenrfilnavn=$_POST ["bildenrfilnavn"];

      $del=explode(";",$bildenrfilnavn);
      $bildenr=$del[0];
      $filnavn=$del[1];  

      include("db-tilkobling.php");
		
      $sqlSetning="DELETE FROM bilde WHERE bildeNr='$bildenr';";
      mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
        /* bilde slettet i databasen*/
		
      $bildefil="bilder/".$filnavn;
      unlink($bildefil) or die ("ikke mulig &aring; slette bilde pÃ¥ serveren");
        /* bilde slettet fra serveren */

      print ("F&oslash;lgende bilde er n&aring; slettet: $bildenr $filnavn <br />");
    }
?> 
  
