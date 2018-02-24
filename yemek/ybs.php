 <?php
  require_once("init.php");
  if (!isset($_SESSION["kullanici"])) { echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>"; exit(); }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eskişehir Büyükşehir Belediyesi | Kurumsal İletişim Platformu</title>
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="comp/table/dataTables.bootstrap.css" />
<script type="text/javascript" language="javascript" src="comp/table/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src="comp/table/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="comp/table/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" class="init">	
  $(document).ready(function() {
	  $('#ara').DataTable( {
		  "bVisible": false,
		  "paging":   false,
       	  "ordering": true,
		  "order": [[ 0, "asc" ]],
		  "scrollY": "60px",
		  "bInfo": 0,
		  "sLength": 1,
		  "sDom": '<"H"lf>t<"F"ip>', 

		 "oSearch": {"sSearch": "..."},
		 language: {"sZeroRecords": ""},
		  "columnDefs": [
			  {
				  "targets": [0,1],
				  "visible": true,
				  "searchable": true,
				  "orderable": true,/*
				  "bVisible": false, 
    			  "bSearchable": true */
			  }
		  ]
		  
	  } );
	  // tıklayınca sıfırlama
	  var fields = document.getElementsByTagName('input'),
	length = fields.length;
	while (length--) {
		if (fields[length].type === 'search') { 
		fields[length].onclick = callJavascriptFunction;
		fields[length].onkeypress = callonkeypressFunction;
		fields[length].onkeyup = callonkeyupFunction;  }
	}
	//sonu
  } );  
  //fonksiyonu
  function callJavascriptFunction(){
	var fields = document.getElementsByTagName('input'),
    length = fields.length;
	while (length--) {
    	if (fields[length].type === 'search') { fields[length].value = ''; }
	}
  }
  function callonkeyupFunction(){
	  var fields = document.getElementsByTagName('input'),
    length = fields.length;
	while (length--) {
    	if (fields[length].type === 'search' && fields[length].value.length === 0 )
		fields[length].value = '...';
		}
  }
    function callonkeypressFunction(){
	  var fields = document.getElementsByTagName('input'),
    length = fields.length;
	while (length--) {
    	if (fields[length].type === 'search' && fields[length].value === '...')
		fields[length].value = '';
		}
  }
</script>
</head>
<body>
  <div class="inner">
    <?php include_once('banner.php'); ?>
    <div class="container">
      <?php include_once('menu.php'); ?>
      <?php 
	  	include_once('mainPageButtons.php');
	  	include_once('mainPagePanels.php');
	  	include_once('mainPageButtonLinks.php');
       	include_once('mainPageLinks.php'); 
		include_once('ic_paydas.php'); 
	  ?>
    </div>
    <?php include_once('footer.php'); ?>
  </div>
  <!-- script dosyaları -->
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  <!-- script dosyaları sonu -->
</body>
</html>