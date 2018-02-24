
<?php
include("baglanti1.php");
//error_reporting(E_ALL ^ E_NOTICE);
$tc= $_POST['tc'];
$isim=$_POST['isim'];
$soyisim= $_POST['soyisim'];
$mail =$_POST['mail'];
$telefon=$_POST['telefon'];
$cinsiyet = $_POST['cinsiyet'];
$okulunadı=$_POST['okulunadı'];
$bolum=$_POST['bolum'];
$ogrenimduzeyi=$_POST['ogrenimduzeyi'];
$stajturu=$_POST['stajturu'];
$gtarih=$_POST['gtarih'];
$ctarih=$_POST['ctarih'];

mysqli_query($baglan,"SET NAMES UTF8");

mysqli_query($baglan,"SET CHARACTER SET UTF8");

$kaydet=mysqli_query($baglan,"insert into stajer (Tc,Isim, Soyisim, Mail, Telefon,Cinsiyet, Okul_Adi,Bolum,Ogrenim_Duzeyi,Stajturu,Gtarih,Ctarih )  values ('$tc' ,'$isim', '$soyisim','$mail','$telefon','$cinsiyet', '$okulunadı','$bolum','$ogrenimduzeyi','$stajturu','$gtarih','$ctarih')");

if($kaydet)

{
echo "Kayıt Başarıyla Yapıldı";
}
else
{
echo "Bir Sorun Oluştu".mysqli_error($baglan);
}
?>