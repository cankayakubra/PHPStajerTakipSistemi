<?php
echo '<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
</div>
</div>
</div>';
/* draws a calendar */
function draw_calendar($month,$year){
	/* draw table */
	$calendar = '';//'<table cellpadding="0" cellspacing="0" class="calendar" width="100%">';
	/* table headings */
	//$headings = array('Pazartesi','Salý','Çarþamba','Perþembe','Cuma','Cumartesi','Pazar');
	//$calendar.= '<tr class="calendar-row"><td class="calendar-day-head">'.implode('</td><td class="calendar-day-head">',$headings).'</td></tr>';
	/* days and weeks vars now ... */
	$running_day = date('w',mktime(0,0,0,$month,0,$year));
	$days_in_month = date('t',mktime(0,0,0,$month+1,0,$year));
	$days_in_this_week = 1;
	$day_counter = 0;
	$dates_array = array();

	/* row for week one */
	$calendar.= '<tr class="calendar-row">';

	/* print "blank" days until the first of the current week */
	for($x = 0; $x < $running_day; $x++):
		$calendar.= '<td class="calendar-day-np"> </td>';
		$days_in_this_week++;
	endfor;
	/* keep going with days.... */
	for($list_day = 1; $list_day <= $days_in_month; $list_day++):
			$calendar.= '<td class="calendar-day">';
			/* add in the day number */
			$tr = mktime(0,0,0,$month,$list_day,$year);
			if(date('Y-m-d') == date('Y-m-d',$tr)) $calendar.= '<div class="day-number" data-toggle="modal" data-target="#myModalNorm" onclick="javascript:tikladimi(this)"><button name="day" class="btn btn-primary btn_today"   >'.$list_day.'</button></div>';
			else $calendar.= '<div class="day-number" data-toggle="modal" data-target="#myModalNorm" onclick="javascript:tikladimi(this)"><button name="day" class="btn btn-default btn_day"  >'.$list_day.' &nbsp;</button></div>';
			$calendar.= '';
			$calendar.= getTodayFaal(date('Y-m-d',$tr));

			/** bugun için yapýlacaklarý bu alana yaza bilirsin **/
			//$calendar.= str_repeat('<p></p>',2);
			
		$calendar.= '</td>';
		if($running_day == 6):
			$calendar.= '</tr>';
			if(($day_counter+1) != $days_in_month):
				$calendar.= '<tr class="calendar-row">';
			endif;
			$running_day = -1;
			$days_in_this_week = 0;
		endif;
		$days_in_this_week++; $running_day++; $day_counter++;
	endfor;

	/* finish the rest of the days in the week */
	if($days_in_this_week < 8):
		for($x = 1; $x <= (8 - $days_in_this_week); $x++):
			$calendar.= '<td class="calendar-day-np"> </td>';
		endfor;
	endif;

	/* final row */
	$calendar.= '</tr>';

	/* end the table */
	$calendar.= '</table>';
	
	/* all done, return result */
	return $calendar;
}
function getTodayFaal($today){
	$query = mysql_query('SELECT * FROM yemek_ekle WHERE yemek_tarihi = "'.$today.'"');
	$yaz = '';
	if(mysql_num_rows($query)>0){
		$yaz .=  '<div id="yemek" data-toggle="modal" data-target="#myModalNorm" class="yemek" onclick="javascript:tikladi(this,\''.tarih($today).'\')" ><ul class="yemek_lst">';
		while($yemek = mysql_fetch_array($query)){		
			if($yemek['yemek1'] != '') $yaz .=  '<li>'.strtolower_tr($yemek['yemek1']).'</li>';
			if($yemek['yemek2'] != '') $yaz .=  '<li>'.strtolower_tr($yemek['yemek2']).'</li>';
			if($yemek['yemek3'] != '') $yaz .=  '<li>'.strtolower_tr($yemek['yemek3']).'</li>';
			if($yemek['yemek4'] != '') $yaz .=  '<li>'.strtolower_tr($yemek['yemek4']).'</li>';
		}
		$yaz .=  '</ul></div>';
		mysql_free_result($query);
	}
	$yaz .=  '';
	return $yaz;
}
function birimGetir($birim_id){
	 $birim = mysql_fetch_row(mysql_query("SELECT BIRIM,MERKEZ_ADI FROM sosyal_merkezler WHERE ID = $birim_id"));
	 return $birim[0].'<br/>'.$birim[1];
}
function strtolower_tr($deger)
 {
   $deger = str_replace("Ç","ç",$deger);
   $deger = str_replace("Ð","ð",$deger);
   $deger = str_replace("I","ý",$deger);
   $deger = str_replace("Ý","i",$deger);
   $deger = str_replace("Ö","ö",$deger);
   $deger = str_replace("Ü","ü",$deger);
   $deger = str_replace("Þ","þ",$deger);

   $deger = strtolower($deger);
   $deger = trim($deger);

   return ucwords_tr($deger);
 } 
 
 function strtoupper_tr($deger)
 {
   $deger = str_replace("ç","Ç",$deger);
   $deger = str_replace("ð","Ð",$deger);
   $deger = str_replace("ý","I",$deger);
   $deger = str_replace("i","Ý",$deger);
   $deger = str_replace("ö","Ö",$deger);
   $deger = str_replace("ü","Ü",$deger);
   $deger = str_replace("þ","Þ",$deger);

   $deger = strtoupper($deger);
   $deger = trim($deger);

   return $deger;
 } 
 
   function ucwords_tr($deger)
         {
         $deger = explode(" ",trim($deger));
         $deger_tr = "";

         for($x=0; $x < count($deger); $x++)
             {
             $deger_bas = substr($deger[$x],0,1);
             $deger_son = substr($deger[$x],1);
             $deger_bas = strtoupper_tr($deger_bas);

             $deger_tr .= $deger_bas.$deger_son." ";
             }

         $deger_tr = trim($deger_tr);

         return $deger_tr;
         } 

?> 
<span style="background-color:#FFC"></span>
<?php
if(isset($_POST['on'])){
	$on = $_POST['on'];
	$once = split('-',$on); 
	$a = $once[0];// $_GET['a'];
	$y = $once[1];// $_GET['y'];
}
else if(isset($_POST['son'])){
	$son = $_POST['son'];
	$sonra = split('-',$son); 
	$a = $sonra[0];// $_GET['a'];
	$y = $sonra[1];// $_GET['y'];
}
else if(isset($_POST['day'])){
	$gun = $_POST['day'];
	$secili = split('-',$gun); 
	$a = $secili[1];// $_GET['a'];
	$y = $secili[0];// $_GET['y'];
	$sg = $secili[2];
}
if(!isset($a) || $a == "" || $a == 0) $a = date('m');
if(!isset($y)) $y = date('Y');
if($a == 12){ $sa = 1; $sy = $y + 1; }
else{ $sa = $a + 1; $sy = $y; }
if($a == 1){ $oa = 12; $oy = $y -1; }
else{ $oa = $a - 1; $oy = $y; }
	$aylar = array('Ocak','Þubat','Mart','Nisan','Mayýs','Haziran','Temmuz','Aðustos','Eylül','Ekim','Kasým','Aralýk');
	$gunler = array('Pazartesi','Salý','Çarþamba','Perþembe','Cuma','Cumartesi','Pazar');
		echo '<div class="panel panel-default">
		<div class="panel-heading"><div class="row"><form method="post"><input type="hidden" name="state" value="faaliyettakvim" />
			<div class="col-md-4 text-left"><button class="btn btn-menu btn-primary" name="on" value="'.$oa.'-'.$oy.'"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Önceki Ay</button></div>
			<div class="col-md-4 text-center"><strong>'.$aylar[$a-1].' '.$y.'</strong></div>
			<div class="col-md-4 text-right"><button class="btn btn-menu btn-primary" name="son" value="'.$sa.'-'.$sy.'">Sonraki Ay <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button></div>
			</form></div></div>
		<div class="panel-body">';
		echo '<table table id="tablo" class="table table-striped table-bordered" cellspacing="0" width="100%" >';
		echo "<thead><tr>";	 // class='work_table_ust'
		foreach($gunler as $gunu)
			echo "<th>$gunu</th>";
		echo "</tr></thead><tbody>";
		echo draw_calendar($a,$y);
		echo "</tbody></table></div></div>";	

?>
<div class="modal fade fadeClose" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            	<div style="float:left;text-align:center;width:90%;">
                	<h4 align="center" class="modal-title" id="myModalLabel" style="font-weight:bold;"> </h4>
                </div>
                <div style="float:left;width:10%"">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span style="font-size:12px;color:#F00" aria-hidden="true">KAPAT</span></button>
                </div>
            
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body" id='faaliyetBootstrap'>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-1.11.0-rc1.min.js"></script>