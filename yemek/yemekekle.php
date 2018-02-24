<script language="javascript">
function myChanged(){
	var date1 = document.getElementById("date1").value;
	if(date1) document.yemekekle.tarih.value = date1 ;
	document.getElementById("yemekekle").submit();
}; 
function silOnaylaAriza()  
{  
	return confirm("Arýza kaydýný silmek istediginizden emin misiniz?");  
};
</script>
<?php 
$tarih = $_POST["tarih"];
if($tarih == "") $tarih = date('d.m.Y', strtotime('next monday'));; //date('Y-m-d');
if(isset($_POST["yemekkaydet"]) && $_POST["yemek1"] != '')
{
	$yemek1 = $_POST["yemek1"];
	$yemek2 = $_POST["yemek2"];
	$yemek3 = $_POST["yemek3"];
	$yemek4 = $_POST["yemek4"];
    $ekle = mysql_query("Insert into yemek_ekle(yemek_tarihi, yemek1, yemek2, yemek3, yemek4, ekleme_tarihi)values('".date('Y-m-d', strtotime($tarih))."', '$yemek1', '$yemek2', '$yemek3', '$yemek4', now()) ON DUPLICATE KEY UPDATE yemek1='$yemek1', yemek2='$yemek2', yemek3='$yemek3', yemek4='$yemek4'");
	if($ekle)
	{
		$bilgi = 'Kayýt Yapýldý'; 
		$message = 'Yemek Menüsü Kaydý.';
		$sonId = mysql_insert_id();
		log_yaz($kisi_id,$user,$sonId,-1,$message);
	}
	else
	{
		$uyari = 'Hatalý Kayýt.';	
	}
}
if(isset($tarih))
{
	$kontrol = mysql_query("SELECT * FROM yemek_ekle WHERE yemek_tarihi = '".date('Y-m-d', strtotime($tarih))."'");
	if(mysql_num_rows($kontrol)>0)
	{
		$yemek_gun = mysql_fetch_array($kontrol);
		$yemek1 = $yemek_gun['yemek1'];
		$yemek2 = $yemek_gun['yemek2'];
		$yemek3 = $yemek_gun['yemek3'];
		$yemek4 = $yemek_gun['yemek4'];
	}
}
?>
<div class="well well-sm"><p>Yeni Yemek Ekle</p>
<form class="form-horizontal" id="yemekekle" name="yemekekle" method="post">
<input type="hidden" name="state" value="yemekekle" />
  <div class="form-group">
    <label class="col-md-3 control-label" for="tbName">Yemeðin Verileceði Tarih:</label>
    <div class="col-md-9">
	    <div class="input-append date div-tarih" id="tarih" data-date="<?php echo $tarih; ?>" data-date-format="dd.mm.yyyy" data-date-viewmode="years">
            <input name="tarih" id="tarih" class="input-tarih" size="16" type="text" value="<?php echo $tarih; ?>" readonly>
            <span class="add-on glyphicon glyphicon-calendar"><i class="icon-calendar"></i></span>
        </div> 
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="tbName">Yemek 1:</label>
    <div class="col-md-6">
	    <input name="yemek1" type="text" size="30" class="form-control" maxlength="50" value="<?php echo $yemek1; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="tbName">Yemek 2:</label>
    <div class="col-md-6">
	    <input name="yemek2" type="text" size="30" class="form-control" maxlength="50" value="<?php echo $yemek2; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="tbName">Yemek 3:</label>
    <div class="col-md-6">
	    <input name="yemek3" type="text" size="30" class="form-control" maxlength="50" value="<?php echo $yemek3; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="tbName">Yemek 4:</label>
    <div class="col-md-6">
	    <input name="yemek4" type="text" size="30" class="form-control" maxlength="50" value="<?php echo $yemek4; ?>" />
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-3 control-label" for="tbName"></label>
    <div class="col-md-6">
    	<input type="submit" class="btn btn-darkgreen" name="yemekkaydet" value="KAYDET"/>
    </div>
  </div>
 </form>
</div>
