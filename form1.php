


<!DOCTYPE html>
<html>

<style type="text/css">

#dis_bolme { 

width: 1000px; 

height:550px;

background-color: #666

}

.ic_bolme{

    float:left;

    width:441px;
	

    height:550px;

    border:#CCC solid 1px;

    background-color: #F00;

    margin-right: 10px;

    margin-left: 4px;
margin-right: 2px;
float:left;

</style>

<body>
<form  enctype="multipart/form-data" action="gonder.php" method="POST">
	<h1 align="center">Stajer Takip Sistemi</h1>
  <p align="center">Stajer Bilgileri.</p> 
 <div align="center">
 <div class="ic_bolme" action="gonder.php">Bölme1
  <form action="gonder.php" method="POST" >
 <h3> TC: </h3>
 <input type="text" name="tc" /><br/>
<h3> İsim:</h3> 
 <input type="text" name="isim" /><br/>
 <h3> Soyisim:</h3> 
 <input type="text" name="soyisim" /><br/>
 <h3>E-mail:</h3> 
 <input type="text" name="mail" /><br/>
 <h3>Telefon:</h3> 
 <input type="text" name="telefon" /><br/>
  <h3>Okulun Adı:</h3> 
 <textarea name="okulunadı"></textarea><br/>
 <h3>Bölümü:</h3> 
 <input type="text" name="bolum" /><br/>
 </form>
 </div>
 <div class="ic_bolme">Bölme2

 <form action="gonder.php" method="post" align="center">
 <h3>Staj Türü:</h3> 
 <input type="radio" name="stajturu" value="Uzun Donem" /> Uzun Dönem<br/>
<input type="radio" name="stajturu" value="Kisa Donem" />Kısa Dönem <br/>
 <h3>Cinsiyet:</h3> 
 <input type="radio" name="cinsiyet" value="Erkek" /> Erkek<br/>
 <input type="radio" name="cinsiyet" value="Kadın" /> Kadın<br/>

 <h3>Öğrenim Düzeyi:</h3> 
 <div align="left">
 <input type="radio" name="ogrenimduzeyi" value="Doktora" /> Doktora<br/>
 <input type="radio" name="ogrenimduzeyi" value="Yuksek Lisans" />Yüksek Lisans <br/>
 <input type="radio" name="ogrenimduzeyi" value="Lisans" /> Lisans<br/>
 <input type="radio" name="ogrenimduzeyi" value="Onlisans" /> Önlisans<br/>
 <input type="radio" name="ogrenimduzeyi" value="Lise" /> Lise<br/>
 
<form enctype="multipart/form-data" action="dosyayukle.php"  method="POST" >
<table border="1" cellpadding="4" align="center">

<tr>

<td>Dosya seçiniz:</td>
<td><input type="FILE" name="dosya"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Yukle"></td>
</tr>
</table>
</div>
</form>

 <h3>Giriş Tarihi:</h3>
    
	
	<input type="date" name="gtarih"><br/>
   
    <h3>Çıkış Tarihi:</h3>
    
    <input type="date" name="ctarih"><br/>
   
 </div>



</form>
</div>

<div class="ic_bolme">Bölme3
    <form action="gonder.php" method="post" align="center">
 

      <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <!--<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="assets/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
   <link href="assets/css/styles.css" rel="stylesheet">

    <link href="assets/css/calendar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <div class="page-content">
    	<div class="row">
		 
		  <div class="col-md-10">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						
		  						<div class="col-md-10">
		  							<div id='calendar'></div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>


		  </div>
		</div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/vendors/fullcalendar/fullcalendar.js"></script>
    <script src="assets/vendors/fullcalendar/gcal.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/calendar.js"></script>

	
    
    <input type="submit" value="Formu gönder" />

</form>
</div>
    
 
</div>

</form>

</body>
</html>