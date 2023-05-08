<?php $this->load->view('front/include/header'); ?>
<?php $kisi=$this->session->userdata('user'); ?>


  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="<?php echo base_url('assets/front/'); ?>img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
      <h2><?php echo $kisi->uyeadi ?> Profil Sayfası</h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('anasayfa');?>">Anasayfa</a></li>                   
          <li>Hesabım</li>
        </ol>
        <img src="<?php echo base_url('assets/front/'); ?>img/icon-pp.jpg" width="50" height="50" style="border-radius:50%;margin-top:-1%"><br><br>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
 
 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
              <?php echo validation_errors(); ?>
 
                <div class="aa-myaccount-login">
                <h4>Hesap Bilgileri</h4>
                 <form action="<?php echo base_url('anasayfa/profilupdate');?>" method="post">
                  <label>Kullanıcı Adı</label><br>
                    <input type="text" name="username" value="<?php echo $kisi->uyeusername?>" required style="width:80%"><br><hr>
                  <label>E-mail Adresi</label><br>
                    <input type="text" name="uyemail" value="<?php echo $kisi->uyemail?>"  style="width:80%"><br><hr>
                  <label>Adı</label><br>
                    <input type="text" name="uyead" value="<?php echo $kisi->uyeadi?>"  style="width:80%"><br><hr>
                  <label>Soyadı</label><br>
                    <input type="text" name="uyesoyad" value="<?php echo $kisi->uyesoyadi?>"  style="width:80%"><br><hr>
                  <label>Açık Adres</label><br>
                    <input type="text" name="adres" value="<?php echo $kisi->uyeadresi?>" style="width:80%"><br><hr>  
                    <button class="aa-browse-btn" type="submit">Kaydet</button>               
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Şifre Güncelle</h4>
                 <form action="<?php echo base_url('anasayfa/sifreupdate');?>" method="post">
                    <label for="">Eski Şifre</label><br>
                    <input type="password" name="old" placeholder="**********" style="width:80%"><br><hr>
                    <label for="">Yeni Şifre<span>*</span></label><br>
                    <input type="password" name="new" minlength="6" placeholder="**********" style="width:80%"><br><hr>
                    <label for="">Yeni Şifre Tekrar<span>*</span></label><br>
                    <input type="password" name="newp" minlength="6"  placeholder="**********" style="width:80%"><br><hr>
                    <button type="submit" class="aa-browse-btn">Değiştir</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

 <?php $this->load->view('front/include/footer'); ?>