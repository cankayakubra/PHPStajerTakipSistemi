<?php
// sessionlari kontrol eder ve baslatir
session_start();
error_reporting(E_ALL ^ E_NOTICE);
/*error_reporting(E_ALL);
ini_set('display_errors', 'On');
*/
ob_start();
if (!isset($_SESSION)) { session_start(); }
/*
$cache_expire = session_cache_expire();

echo "The cache limiter is now set to $cache_limiter<br />";
echo "The cached session pages expire after $cache_expire minutes";
*/
// sayfalarda gerekli olan yardýmcý sayfalarý ekliyoruz.
require_once("database.php");
require_once("log.php");
$uyari = '';
$bilgi = '';

//kullanici bilgileri
if(isset($_SESSION['kullanici'])){
	$kullanici = $_SESSION['kullanici'];
	$kisi_id = $kullanici[0];
	$user = $kullanici[1];
	$adSoyad = $kullanici[2];
	$birim = $kullanici[3]; 
	$yetki = $kullanici[4];
	$giris = $kullanici[5];
}
function logout(){
	echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>"; 
	//header('Location: ybs.php');
	exit();
}

function izinVer($kul_izin){
	foreach($_SESSION['izinler'] as $izin){
		if($kul_izin == $izin) return true;
	}
}

function tarih($proje_tarih){
	$date = explode("-", $proje_tarih);
	$gun    = $date[2];
	$ay     = $date[1];
	$yil    = $date[0];
 
	$date = substr($gun, 0, 2).".".$ay.".".$yil;
 
	return $date;
}
function tarihTam($proje_tarih){
	$dateAll = explode(" ", $proje_tarih);
	$date = explode("-", $dateAll[0]);
	$gun    = $date[2];
	$ay     = $date[1];
	$yil    = $date[0];
 
	$date = $gun.".".$ay.".".$yil." ".$dateAll[1];
 
	return $date;
}
function strtoupperTR($str)
{
	$str = str_replace(array('i', 'ý', 'ü', 'ð', 'þ', 'ö', 'ç'), array('Ý', 'I', 'Ü', 'Ð', 'Þ', 'Ö', 'Ç'), $str);
	return strtoupper($str);
}
function tarihFormatDB($date){
	return date('Y-m-d',strtotime($date));
}
function tarihFormatTR($date){
	return date('d.m.Y',strtotime($date));
}
?>