<?php

/*MySQL kullanici ve veri tabani bilgileri */ 
$mysql_sunucu="localhost";///"172.16.4.10";	// 
$mysql_kullanici="root";   //mysqladmin
$mysql_sifre="ybs12345";	//root7556	//14mini19tr1tor
$mysql_vt="ybsdatabase";	
$siteadi="Yönetim Bilgi Sistemi";

@mysql_connect($mysql_sunucu,$mysql_kullanici,$mysql_sifre) or die("Veri tabanina baglanilamadi! Cunku: ". mysql_error());
@mysql_select_db($mysql_vt) or die("Veri tabanini seçemedi.");

mb_internal_encoding('latin5'); 

mysql_query('SET NAMES latin5'); 

mysql_query("SET CHARACTER SET latin5"); 

mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'"); 

