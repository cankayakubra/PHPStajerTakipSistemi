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
	
	if (empty($ara))
	{
		echo 'Arama alanını boş bıraktın';
	}
	else
	{
		if ( $satirsay>0)
		{       
			while($kayit=mysqli_fetch_array($sonuc1))
			{
				echo $kayit["Id"].' '.$kayit["Tc"].' '.$kayit["Isim"].' '.$kayit["Soyisim"].' '.$kayit["Cinsiyet"].' '.$kayit["Mail"].' '.$kayit["Telefon"].' '.$kayit["Okul_Adi"].' '.$kayit["Gtarih"].' '.$kayit["Ctarih"].' '.$kayit["Bolum"].' '.$kayit["Ogrenim_Duzeyi"];
				echo '<br/>';
			}
		}
		else
		{
			echo 'Eşleşen Kayıt Yok.';
		}
	}
}
?>
