<?php  /* db-tilkobling */
/*
/*  Programmet foretar tilkobling til database-server og valg av database
*/

  $host="localhost";
  $user="240970";  /* her skal det være studentnummeret */
  $password="...";  /* her skal det være MySQL-passordet i klartekst*/
  $database="240970";  /* her skal det være studentnummeret */   
    /* verdier satt for host, user, password og database for tilkobling til databaseserver */

  $db=mysqli_connect($host,$user,$password,$database) or die ("ikke kontakt med database-server");
    /* tilkobling til database-serveren utført */
 
?>
