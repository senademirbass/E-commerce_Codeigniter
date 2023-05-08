<?php $this->load->view('front/include/header'); ?>
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="<?php echo base_url('assets/front/img/fashion/fashion-header-bg-8.jpg');?>" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Bilgisayar Aksesuarları</h2>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head">
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <?php foreach ($urunler as $urunler){ ?>
                <li>
                  <figure>
                    <a class="aa-product-img" href=""><img src="<?php echo base_url($urunler->u_kapakresmi);?>"></a>
                    <button class="aa-add-card-btn addToCartBtn"><span class="fa fa-shopping-cart"></span>Sepete Ekle</button>
                    <figcaption>
                      <h4 class="aa-product-title"><?php echo $urunler->u_adi;?></h4>
                      <span class="aa-product-price"><?php echo $urunler->u_fiyat;?> TL</span>
                      <p class="aa-product-descrip"><?php echo $urunler->u_bilgi;?></p>
                    </figcaption>
                  </figure>                         
                  <!-- product badge -->
                  <span class="aa-badge aa-sale">Yeni!</span>
                </li>
                <?php } ?>
              </ul>               
            </div>
          </div>
        </div>  
      </div>
    </div>
  </section>
  <!-- / product category -->
    <?php $this->load->view('front/include/footer'); ?>