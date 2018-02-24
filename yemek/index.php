 <?php
  require_once("init.php");
  if(isset($_SESSION["kullanici"])) { echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=ybs.php'>"; }
?>
  <!DOCTYPE html>
  <html lang="tr">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Eskişehir Büyükşehir Belediyesi | Yönetim Bilgi Sistemi</title>
      <!-- Bootstrap -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="icon" type="image/png" href="images/favicon.png" />
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
    <!--
    <div class="row">
      <div class="col-md-4"><img alt="EBB" src="images/logo.png">
      </div>
      <div class="col-md-4"><center>YÖNETİM BİLGİ SİSTEMİ</center>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    -->
    <div class="inner">
      <?php include_once('banner.php'); ?>
      <!--
      <div class="container-fluid banner">
          <div class="navbar-header">
          <a class="navbar-brand banner-logo" href="#">
            <img alt="EBB" src="images/logo.png">
          </a>
          <span class="navbar-brand banner-text" href="#">YÖNETİM BİLGİ SİSTEMİ</span>
          </div>
      </div>
      -->
      <div class="container">
          <!-- üye giriş -->
          <div class="row">
              <div class="col-lg-3 col-md-4 col-md-offset-4">
                  <div class="login-panel panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title">Giriş Yapınız</h3>
                      </div>
                      <div class="panel-body">
                          <form role="form" method="post">
                              <fieldset>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="Kullanıcı Adı" name="tbUser" type="user" autofocus value="<?php if(isset($_COOKIE['adim'])) echo $_COOKIE['adim'] ?>">
                                  </div>
                                  <div class="form-group">
                                      <input class="form-control" placeholder="Şifre" name="tbPassword" type="password" value="">
                                  </div>
                                  <div class="checkbox">
                                      <label>
                                          <input name="hatirla" type="checkbox" value="1"  <?php if(isset($_COOKIE['adim'])) echo 'checked="checked"' ?> >Beni Hatırla
                                      </label>
                                  </div>
                                  <!-- Change this to a button or input when using this as a form -->
                                  <button class="btn btn-lg btn-default btn-block" type="submit">Giriş Yap</button>
                                  <!--<a href="index.php" class="btn btn-lg btn-default btn-block">Giriş Yap</a>-->
                              </fieldset>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <?php include_once('login.php'); ?>
          <!-- üye giriş  sonu -->
          <!-- bilgi alanlari -->
      		<?php include_once('mainPagePanels.php'); ?>
            
          <!-- bilgi alanlari sonu -->
          <!-- linkler -->
          
      		<?php if(isset($_SESSION["kullanici"])) include_once('links.php'); ?>
          <!-- linkler sonu -->
          <!--
          <div style="clear:both"></div>
          <div class="row">
              <div class="col-lg-3 col-md-4 col-md-offset-4">
           <div class="panel panel-default">
              <div class="panel-body text-center">Hoşgeldiniz! Eskişehir Büyükşehir Belediyesi Kurumsal İletişim Platformu.</div>
            </div>
          </div>
          </div>
          -->
        </div>
        <?php include_once('footer.php'); ?>
      </div>
      <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>