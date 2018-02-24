<div class="yemek_bugun">
<?php
	$yaz = '';
	$kontrol = mysql_query("SELECT * FROM yemek_ekle WHERE yemek_tarihi = '".date('Y-m-d')."'");
	if(mysql_num_rows($kontrol)>0)
	{
     	$yemek_gun = mysql_fetch_array($kontrol);
     	if($yemek_gun['yemek1']) $yaz .=  '<li type="square">'.$yemek_gun['yemek1'].'</li>';
		if($yemek_gun['yemek2']) $yaz .=  '<li type="square">'.$yemek_gun['yemek2'].'</li>';
		if($yemek_gun['yemek3']) $yaz .=  '<li type="square">'.$yemek_gun['yemek3'].'</li>';
		if($yemek_gun['yemek4']) $yaz .=  '<li type="square">'.$yemek_gun['yemek4'].'</li>';
	}
	echo  $yaz;
?>
</div>