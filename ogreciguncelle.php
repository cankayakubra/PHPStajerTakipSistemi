<?php

 include("baglanti1.php");
if ($_POST)
{
    $ara=$_POST['ara'];
	mysqli_query($baglan,"SET NAMES UTF8");

    mysqli_query($baglan,"SET CHARACTER SET UTF8");
	$kaydet=mysqli_query($baglan,"Select * From stajer Where Isim=$ara");
    $sonuc1= mysqli_query($baglan,$kaydet);
    $satirsay=mysqli_num_rows($sonuc1);
	
	    if ($satirsay>0)
{
    $satir = mysqli_fetch_array($sonuc1);
    //Kayıt bulundu
    //Bu kısımda form içine veritabanında çekilen değerleri yazıyoruz.
<table border="1" align="center">
<tr>
<td colspan="2" align="center"> Kayıt Güncelleme</td>
 
</tr>
<tr>
<td>TC Kimlik No</td>
<td><input type="text" name="tckimlikno" value="'.$satir['tc'].'"></td>
</tr>
<tr>
<td>Adı</td>
<td><input type="text" name="adi" value="'.$satir['isim'].'"></td>
</tr>
<tr>
<td>Soyadı</td>
<td><input type="text" name="soyadi" value="'.$satir['soyisim'].'"></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type="text" name="n1" value="'.$satir[''mail'].'"></td>
</tr>
<tr>
<td>Telefon</td>
<td><input type="text" name="n2" value="'.$satir['telefon'].'"></td>
</tr>
<tr>
<td>Cinsiyet</td>
<td><input type="text" name="n3" value="'.$satir['cinsiyet'].'"></td>
<td>Okulun Adı</td>
<td><input type="text" name="n3" value="'.$satir['okulunadı'].'"></td>
<td>Bölümü</td>
<td><input type="text" name="n1" value="'.$satir['bolum'].'"></td>
</tr>
<tr>
<td>Staj Türü</td>
<td><input type="text" name="n2" value="'.$satir['stajturu'].'"></td>
</tr>
<tr>
<td>Öğrenim Düzeyi</td>
<td><input type="text" name="n1" value="'.$satir['ogrenimduzeyi'].'"></td>
</tr>
<tr>
<td>Giriş Tarihi</td>
<td><input type="text" name="n2" value="'.$satir['gtarih'].'"></td>
</tr>
<tr>
<td>Çıkış Tarihi</td>
<td><input type="text" name="n3" value="'.$satir['ctarih'].'"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>';

}
} 
else {
//Kayıt bulunamadı
echo "Aranılan kayıt bulunamadı";
}

?>