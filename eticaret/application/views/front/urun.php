<?php $this->load->view('front/include/header'); ?>
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="<?php echo base_url('assets/front/img/fashion/fashion-header-bg-8.jpg');?>" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2><?php echo $urun->u_adi;?></h2>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('anasayfa');?>">Anasayfa</a></li>         
          <li style="color:white">Ürünler</li>
          <li style="color:white"><?php echo $urun->u_turu;?></li>
          <li class="active"><?php echo $urun->u_adi;?></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><img src="<?php echo base_url($urun->u_kapakresmi);?>"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?php echo $urun->u_adi;?></h3>
                    <div class="aa-price-block">
                      <h1 class="aa-product-view-price"><?php echo $urun->u_fiyat;?> TL</h1>
                      <h5 class="aa-product-avilability">Ürün Stoku: <span><?php echo $urun->u_stok;?></span></h5>
                    </div>
                    <div class="aa-prod-view-bottom">
                    <input type="number" class=form-kontrol placeholder="Ürün adeti giriniz." id="<?php echo $urun->u_id; ?>">
                    <button class="aa-add-card-btn sepeteekle" name="sepeteekle" data-u_adi="<?php echo $urun->u_adi;?>" 
                    data-u_id="<?php echo $urun->u_id;?>" data-u_fiyat="<?php echo $urun->u_fiyat;?>">
                    Sepete Ekle</button>     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Ürün Açıklaması</a></li>              
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>
                  <?php echo $urun->u_bilgi;?>
                  </p>    
                </div>       
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->

  <?php $this->load->view('front/include/footer'); ?>