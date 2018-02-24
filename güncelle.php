<?php
 include("baglanti1.php");
$ogrID= $_GET['id'];
 
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



//güncelleme için SQL sorgumuzu yazıyoruz.
$sql = "UPDATE stajer SET ADI='$isim',  SOYADI='$soyisim', TCKIMLIKNO='$tc', MAİL='$mail', TELEFON='$telefon', CİNSİYET='$cinsiyet', OKULUNADI='$okulunadı', BOLUM='$bolum', OGRENİMDÜZEYİ='$ogrenimduzeyi', STAJTURU='$stajturu', GTARİH='$gtarih', CTARİH='$ctarih'   WHERE ogrenciID='$ogrID'";
 
//sorgumuzu çalıştırıyoruz
$sonuc= mysqli_query($baglan,$sql);
if($sonuc>0) 
{ 
echo '<center><img src="images/tamam.jpg" width="64">';
echo "<br>";
echo 'Başarıyla güncellendi;';
echo "<br>";
echo '<a href=notlistele.php>Öğrenci Listesi</a></center>';
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
 
?>