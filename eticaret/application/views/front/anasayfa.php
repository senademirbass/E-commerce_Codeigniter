<?php $this->load->view('front/include/header'); ?>

  <!-- Start slider -->
  <section id="aa-slider">
  <div class="aa-slider-area">
<?php echo validation_errors();?>
<?php echo $this->session->flashdata('inf'); ?>
<?php echo $this->session->flashdata('alert'); ?>
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo base_url('assets/front/img/slider/slider-one.jpg');?>"/>
              </div>
              <div class="seq-title">               
                <h2 data-seq>Telefon Aksesuarları</h2>                
                <p data-seq>Birbirinden farklı modellerimiz sepetine eklenmeyi bekliyor!</p>
                <a data-seq href="<?php echo base_url('product_t');?>" class="aa-shop-now-btn aa-secondary-btn">Şimdi Satın Al</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo base_url('assets/front/img/slider/slider-two.jpg');?>"/>
              </div>
              <div class="seq-title">                
                <h2 data-seq>Bilgisayar Aksesuarları</h2>                
                <p data-seq>Yoksa sen hala yeni Laptop Kılıfı modellerimizi incelemedin mi?</p>
                <a data-seq href="<?php echo base_url('product_b');?>" class="aa-shop-now-btn aa-secondary-btn">Şimdi Satın Al</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo base_url('assets/front/img/slider/slider-th.jpg');?>"/>
              </div>
              <div class="seq-title">               
                <h2 data-seq>Kablolar</h2>                
                <p data-seq style="color:black">250 TL üzeri alışverişinde kablo alışverişlerinde geçerli 50 TL kupon kazanma fırsatı!</p>
                <a data-seq href="<?php echo base_url('product_k');?>" class="aa-shop-now-btn aa-secondary-btn">Şimdi Satın Al</a>
              </div>
            </li>                  
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <br><br><br><hr>
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>Ücretsiz Kargo</h4>
                <P>500 TL ve üzeri siparişleriniz için kargo ücreti ödemezsiniz!</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>Hızlı Teslimat</h4>
                <P>3 iş günü içerisinde tüm siparişleriniz teslim edilmiş olur!</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>09:00 / 19:00</h4>
                <P>Belirtilen saatler içinde müşteri temsilcilerimizle iletişime geçebilirsiniz!</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container" style="background-color:white">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="<?php echo base_url('assets/front/'); ?>img/yorum/yorum-1.png">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Hızlı teslimat, kaliteli ürün. Sürekli müşteri olmak için can atıyorum!</p>
                  <div class="aa-testimonial-info">
                    <p>Ezgi T.</p>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="<?php echo base_url('assets/front/'); ?>img/yorum/yorum-2.png">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>İndirimler gerçekten çok yardımcı oluyor, kuponlar için teşekkürler!</p>
                  <div class="aa-testimonial-info">
                    <p>Efe A.</p>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="<?php echo base_url('assets/front/'); ?>img/yorum/yorum-3.png">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Fiyatlar çok iyi, ayrıca site tasarımını da çok beğendiğimi söylemek isterim!</p>
                  <div class="aa-testimonial-info">
                    <p>Can S.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

<?php $this->load->view('front/include/footer'); ?>