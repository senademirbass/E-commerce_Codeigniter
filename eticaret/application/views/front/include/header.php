
<!DOCTYPE html>
<html lang="tr">
  <head>
    <?php $kisi=$this->session->userdata('user'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>electroKOU</title>
    
    <!-- Font awesome -->
    <link href="<?php echo base_url('assets/front/css/font-awesome.css');?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/front/css/bootstrap.css');?>" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="<?php echo base_url('assets/front/css/jquery.smartmenus.bootstrap.css');?>" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/jquery.simpleLens.css');?>">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/slick.css');?>">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/nouislider.css');?>">
    <!-- Theme color -->
    <link id="switcher" href="<?php echo base_url('assets/front/css/theme-color/default-theme.css');?>" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="<?php echo base_url('assets/front/css/sequence-theme.modern-slide-in.css');?>" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="<?php echo base_url('assets/front/css/style.css');?>" rel="stylesheet">    

    <!--Gritter-->
    <link href="<?php echo base_url('assets/front/gritter/css/jquery.gritter.css');?>" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    
  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Hoşgeldiniz!</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-usd"></i>TL
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                    </ul>
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-00-0000-41</p>
                </div>
                <!-- / cellphone -->
              </div>
              <?php if($this->session->userdata('durum')){?>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="<?php echo base_url('anasayfa/profilim');?>">Profilim</a></li>
                </ul>
              </div>
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="<?php echo base_url('anasayfa/sepetim');?>">Sepetim</a></li>
                </ul>
              </div>
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="<?php echo base_url('uyeislem/cikisyap');?>">Çıkış Yap</a></li>
                </ul>
              </div>
              <?php }else{?>
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Giriş</a></li>
                </ul>
              </div>
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="" data-toggle="modal" data-target="#login-modal-2">Kayıt Ol</a></li>
                </ul>
              </div> 
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="<?php echo base_url('anasayfa');?>">
                  <span class="fa fa-shopping-cart"></span>
                  <p>electro<strong>KOU</strong><span>Kocaeli Üniversitesi</span></p>
               </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
              <!-- search box -->
              <div class="aa-search-box">
              <input type="text" id="harf" onkeyup="anlikarama()" placeholder="Aradığınız ürünün kategorisini,markasını ya da adını yazınız.">
              <div id=urunler></div>
              <button type="submit"><span class="fa fa-search"></span></button>
              </div>
              <!-- / search box -->        
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
   <!-- menu -->
   <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url('product_t');?>">Telefon<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">Akıllı Saat</a></li>
                  <li><a href="#">Kulakiçi Kulaklık</a></li>
                  <li><a href="#">Bluethooth Kulaklık</a></li>                                                
                  <li><a href="#">Kılıf</a></li>
                  <li><a href="#">Şarj Cihazları</a></li>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url('product_b');?>">Bilgisayar<span class="caret"></span></a>
                <ul class="dropdown-menu">  
                  <li><a href="#">Klavye</a></li>                                                                
                  <li><a href="#">Mouse</a></li>     
                  <li><a href="#">Mouse Pad</a></li>           
                  <li><a href="#">Çanta-Kılıf</a></li>
                  <li><a href="#">Şarj Cihazı</a></li>              
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url('product_k');?>">Kablolar<span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="#">HDMI</a></li>
                  <li><a href="#">Ses Kablosu</a></li>
                  <li><a href="#">Uydu Kablosu</a></li>                                                
                  </li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  
  <!-- Giriş Formu -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Giriş Yap</h4>
          <div class="info"></div>
          <form class="aa-login-form" method="post" action="<?php echo base_url('uyeislem/girisyap');?>">
            <label for="">E-mail Adresi<span>*</span></label>
            <input type="email" name="email" placeholder="E-mail" style="width:290px; height: 40px;" required="required">
            <label for="">Şifre<span>*</span></label>
            <input type="password" name="password" placeholder="Şifre" required="required">
            <button class="aa-browse-btn" type="submit">Giriş</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme">Beni Hatırla</label>
            <p class="aa-lost-password"><a href="#">Şifremi Unuttum</a></p>
          </form>
        </div>                        
      </div>
    </div>
  </div>    
<!--Giriş Formu Bitiş-->
<!--Kayıt Ol Formu-->
<div class="modal fade" id="login-modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Kayıt Ol</h4>
          <form class="aa-login-form-2" method="post" action="<?php echo base_url('uyeislem/kayitol');?>">
            <label for="">Adınız<span>*</span></label><br>
            <input type="text" name="ad" placeholder="Adı" style="text-align:center"><br>
            <label for="">Soyadınız<span>*</span></label><br>
            <input type="text" name="soyad" placeholder="Soyadı" style="text-align:center"><br>
            <label for="">E-mail<span>*</span></label><br>
            <input type="email"name="email" placeholder="E-mail"  style="width:500px; height: 40px;" required><br>
            <label for="password">Şifre<span>*</span></label><br>
            <input type="password" name="sifre"  style="text-align:center;width:300px; height: 40px;" placeholder="En az 6 haneli şifre oluşturun."><br>
            <label for="password">Şifre Tekrar<span>*</span></label><br>
            <input type="password" name="sifre2"  style="text-align:center"><br><br>
            <button class="aa-browse-btn" type="submit">Kayıt Ol</button>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>  

<!--/Kayıt Ol Bitiş-->