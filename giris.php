<?php
include("baglanti1.php");
$kullanici_adi=$_POST['kullaniciAdi'];
$sifre=$_POST['sifre'];

if ($kullanici_adi=="Nihal_Calıskan" and $sifre=="1234") {
	include("menu.php");
}

//$kaydet = mysqli_query($link,"insert into stajer ( Kullanici_Adi, Sifre) values ( '$kullanici_adi', '$sifre')");
 

 
?>