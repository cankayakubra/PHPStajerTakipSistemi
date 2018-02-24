<?php
//include("baglanti1.php");
// List of events
 $json = array();  

 // Query that retrieves events
 $requete = "SELECT * FROM evenement ORDER BY id";

 // connection to the database
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=ebb', 'root', '');
 $bdd->query("SET NAMES utf8"); 
 $bdd->query("SET CHARACTER SET utf8"); 
 $bdd->query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
 $bdd->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
 
 } catch(Exception $e) {
  exit('Unable to connect to database.');
 }
 // Execute the query
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // sending the encoded result to success page
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

?>