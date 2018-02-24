<meta charset="utf-8">
<?php
 
$baglan=new mysqli("localhost","root","","ebb"); 
 if($baglan->connect_error) //Eğer hata varsa yazdırıyoruz 
    {
        echo 'Veritabanına bağlanamadı.';
       die($db->connect_error);
    }
else{
      echo 'Veritabanına Bağlandı';
}

	

 ?>