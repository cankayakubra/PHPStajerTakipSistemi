 <?php
//  require_once("init.php");
  //if (!isset($_SESSION["kullanici"])) { echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>"; exit(); }
  
  require('...\ybs\calendar\classes');
  function takvim($getDate,$tarih)
  {
	  $parse = explode("-",$tarih); 
	  $myCalendar = new tc_calendar($getDate, true);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  if($tarih) {$myCalendar->setDate($parse[2],$parse[1],$parse[0]);}
	  else { $myCalendar->setDate(date("d"),date("m"),date("Y")); };
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2014, 2020);
	  $myCalendar->dateAllow('2014-01-01', '2020-12-31');
	  //$myCalendar->setSpecificDate(array("2012-01-01", "2012-04-23", "2012-05-19", "2012-08-30", "2012-10-29"), 0, 'year');
	  $getDate =  $myCalendar->getDate();
	  $myCalendar->setOnChange("myChanged()");
	  $myCalendar->writeScript();
  };
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eskişehir Büyükşehir Belediyesi | Yemek Listesi</title>
  <link rel="icon" type="image/png" href="images/favicon1.png" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css"  href="css/style.css"/>
  <link rel="stylesheet" type="text/css"  href="stylesheets/takvim.css"/>
  <link rel="stylesheet" type="text/css" href="comp/table/dataTables.bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
  <script type="text/javascript" language="javascript" src="comp/table/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" language="javascript" src="comp/table/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="comp/table/dataTables.bootstrap.min.js"></script>
  <script language="javascript" src="calendar/calendar.js"></script>
<script src="yemek/faaliyet.js"></script>
</head>
<body>
  <div class="inner">
    <?php include_once('banner.php'); ?>
    <div class="container">
      <?php include_once('menu.php'); ?>
      	<ol class="breadcrumb">
          <li><a href="ybs.php">Anasayfa</a></li>
          <li><a href="yemek_menu.php">Yemakhane Menüsü</a></li>
          <?php
             // switch($_POST['state']){
               //   case 'yemekekle' : echo '<li class="active">+ Yeni Yemek Kayıt</li>'; break;
                 // case 'yemektakvimi':
                 // default : 
                   //   echo '<li class="active">+ Yemek Takvimi</li>';
                  //break;
             // }
          ?>
        </ol>
		<div class="row">
        	<?php 
			//if(izinVer(1)){
				//echo '<form name="frmMenu" method="post" action="yemek_menu.php" >';
				//if(izinVer(131)) echo '<button class="btn btn-menu btn-green" name="state" value="yemekekle" > Yeni Yemek Ekle </button>';
				//if(izinVer(132)) echo '<button class="btn btn-menu btn-green" name="state" value="yemektakvimi" > Yemek Takvimi </button>';
				//echo '</form><br />';
			//}	
			?>
			  </form>  <br />
			<?php
				if(isset($_GET['state'])) $state = $_GET['state'];
				else if(isset($_POST['state'])) $state = $_POST['state'];
				else $state = '';
				switch($state)
				{
					case 'yemekekle' :
						include("yemek/yemekekle.php");
						break;					
					default :
						include_once("yemek/yemektakvimi.php");
						//anasayfa();
				}
			if($uyari != "") echo '<div class="alert alert-warning" role="alert">'.$uyari.'</div>';
			if($bilgi != "") echo '<div class="alert alert-info" role="alert">'.$bilgi.'</div>';
			if(isset($hata)) echo '<div class="alert alert-danger" role="alert">'.$hata.'</div>';
			?>
        </div>
    </div>
    <?php include_once('yemek/footer.php'); ?>
  </div>
  <script src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
	$(document).ready(function () {
		$('#tarih').datepicker({
			format: "dd.mm.yyyy"
		});
	});
	</script>
  <!-- script dosyalar?
  <script src="js/jquery.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
  <!-- script dosyalar? sonu -->
</body>
</html>


