<?php
//include("baglanti1.php");
/* VALUES */
$id=$_POST['id'];
$title=$_POST['title'];
$start=$_POST['start'];
$end=$_POST['end'];

// connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=ebb', 'root', '');
 $bdd->query("SET NAMES utf8"); 
 $bdd->query("SET CHARACTER SET utf8"); 
 $bdd->query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
 $bdd->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
 } catch(Exception $e) {
 exit('Impossible de se connecter à la base de données.');
 }

$sql = "UPDATE evenement SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title,$start,$end,$id));

?>